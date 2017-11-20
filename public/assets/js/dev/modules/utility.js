SendChow.Utility = function () {
    let makePostRequest = function (url, success, error) {
          $.ajax({
              url: url,
              success: success,
              error: error
          });
    };

    return {
        makePostRequest: makePostRequest
    };
}();
