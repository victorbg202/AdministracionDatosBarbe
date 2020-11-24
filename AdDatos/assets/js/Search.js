function filterSearch() {
    $('.searchResult').html('<div id="loading">Cargando.....</div>');
    var action = 'fetch_data';
    var minPrice = $('#minPrice').val();
    var maxPrice = $('#maxPrice').val();
    var brand = getFilterData('brand');
    var ram = getFilterData('ram');
    var storage = getFilterData('storage');
    $.ajax({
    url:"action.php",
    method:"POST",
    dataType: "json",
    data:{action:action, minPrice: minPrice, maxPrice:maxPrice, brand:brand, ram:ram, storage:storage},
    success:function(data){
    $('.searchResult').html(data.html);
    }
    });
    }