SendChow.Location = function () {
    let getRegionsForCity = function(cityId, selector){
        "use strict";
        $.ajax({
            url:'/location/get_regions/'+cityId,
            success:  (response) => {
                populateSelectBox(response.data, selector);
            }
        });

    };
    //Collects and array and a string selector, type is id
    let populateSelectBox = (data, selector)=>{
        "use strict";
        let options = '';
        for( let key in data){
            if(data.hasOwnProperty(key)){
                options = options+'<option value="'+data[key].id+'">'+data[key].region+'</option>';
            }
        }
        $('#'+selector).html(options);
        $('#'+selector).selectpicker("refresh");
    };
    return {
        getRegionsForCity: getRegionsForCity,
        attachEvent: function () {
            $(document).on('change', '#locale', function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                getRegionsForCity($(this).val(), 'region');
            });
        }
    };
}();