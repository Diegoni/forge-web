$(document).ready(function () {
    prepareAppBucketTree();
    $('#refreshBuckets').click(function () {
      $('#appBuckets').jstree(true).refresh();
      console.log('refreshBuckets click');
    });

    $('#createNewBucket').click(function () {
      createNewBucket();
      console.log('createNewBucket click');
    });

    $('#createBucketModal').on('shown.bs.modal', function () {
      $("#newBucketKey").focus();
      console.log('createBucketModal shown');
    })

    $('#hiddenUploadField').change(function () {
      var node = $('#appBuckets').jstree(true).get_selected(true)[0];
      var _this = this;
      if (_this.files.length == 0) return;
      var file = _this.files[0];

      console.log('hiddenUploadField change');


      switch (node.type) {
        case 'bucket':
          var formData = new FormData();
          formData.append('fileToUpload', file);
          formData.append('bucketKey', node.id);

          console.log('switch case bucket');

          $.ajax({
            //url: '/api/forge/oss/objects',
            url: '/forge-web/post_oss_objects.php',
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
              $('#appBuckets').jstree(true).refresh_node(node);

              console.log('ajax success appBuckets');

              _this.value = '';
            }
          });
          break;
      }
    });
  });

  function createNewBucket() {
    console.log('function createNewBucket');

    var bucketKey = $('#newBucketKey').val();
    jQuery.post({
      //url: '/api/forge/oss/buckets',
      url: '/forge-web/post_oss_buckets.php',
      contentType: 'application/json',
      data: JSON.stringify({ 'bucketKey': bucketKey }),
      success: function (res) {
        console.log('createNewBucket ajax success');

        $('#appBuckets').jstree(true).refresh();
        $('#createBucketModal').modal('toggle');
      },
      error: function (err) {
        console.log('createNewBucket ajax error');

        if (err.status == 409)
          alert('Bucket already exists - 409: Duplicated')
        console.log(err);
      }
    });
  }

  function prepareAppBucketTree() {
    console.log('function prepareAppBucketTree');

    $('#appBuckets').jstree({
      'core': {
        'themes': { "icons": true },
        'data': {
          //"url": '/api/forge/oss/buckets',
          "url": '/forge-web/post_oss_buckets.php',
          "dataType": "json",
          'multiple': false,
          "data": function (node) {
            console.log('appBuckets core data');
            console.log('id: '+node.id );
            console.log(node);

            return { "id": node.id };
          }
        }
      },
      'types': {
        'default': {
          'icon': 'glyphicon glyphicon-question-sign'
        },
        '#': {
          'icon': 'glyphicon glyphicon-cloud'
        },
        'bucket': {
          'icon': 'glyphicon glyphicon-folder-open'
        },
        'object': {
          'icon': 'glyphicon glyphicon-file'
        }
      },
      "plugins": ["types", "state", "sort", "contextmenu"],
      contextmenu: { items: autodeskCustomMenu }
    }).on('loaded.jstree', function () {
      console.log('on loaded.jstree');

      $('#appBuckets').jstree('open_all');
    }).bind("activate_node.jstree", function (evt, data) {
      console.log('bind activate_node jstree');


      if (data != null && data.node != null && data.node.type == 'object') {
        console.log('if data !=null');

        $("#forgeViewer").empty();
        var urn = data.node.id;
        getForgeToken(function (access_token) {
          jQuery.ajax({
            url: 'https://developer.api.autodesk.com/modelderivative/v2/designdata/' + urn + '/manifest',
            headers: { 'Authorization': 'Bearer ' + access_token },
            success: function (res) {
              console.log('getForgeToken ajax success');

              if (res.status === 'success') launchViewer(urn);
              else $("#forgeViewer").html('The translation job still running: ' + res.progress + '. Please try again in a moment.');
            },
            error: function (err) {
              console.log('getForgeToken ajax error');

              var msgButton = 'This file is not translated yet! ' +
                '<button class="btn btn-xs btn-info" onclick="translateObject()"><span class="glyphicon glyphicon-eye-open"></span> ' +
                'Start translation</button>'
              $("#forgeViewer").html(msgButton);
            }
          });
        })
      }
    });
  }

  function autodeskCustomMenu(autodeskNode) {
    console.log('function autodeskCustomMenu');

    var items;

    switch (autodeskNode.type) {
      case "bucket":
        console.log('switch case bucket');

        items = {
          uploadFile: {
            label: "Upload file",
            action: function () {
              uploadFile();
            },
            icon: 'glyphicon glyphicon-cloud-upload'
          }
        };
        break;
      case "object":
        console.log('switch case object');

        items = {
          translateFile: {
            label: "Translate",
            action: function () {
              var treeNode = $('#appBuckets').jstree(true).get_selected(true)[0];
              translateObject(treeNode);
            },
            icon: 'glyphicon glyphicon-eye-open'
          }
        };
        break;
    }

    return items;
  }

  function uploadFile() {
    console.log('function uploadFile');

    $('#hiddenUploadField').click();
  }

  function translateObject(node) {
    console.log('function translateObject');

    $("#forgeViewer").empty();
    if (node == null) node = $('#appBuckets').jstree(true).get_selected(true)[0];
    var bucketKey = node.parents[0];
    var objectKey = node.id;
    jQuery.post({
      //url: '/api/forge/modelderivative/jobs',
      url: '/forge-web/post_modelderivative_jobs.php',
      contentType: 'application/json',
      data: JSON.stringify({ 'bucketKey': bucketKey, 'objectName': objectKey }),
      success: function (res) {
        console.log('post success');

        $("#forgeViewer").html('Translation started! Please try again in a moment.');
      },
    });
  }