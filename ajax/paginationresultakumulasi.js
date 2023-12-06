$(document).ready(function(){
    $(".page-loader").hide();
    table_result(1,"","","","ALL","ALL","ALL","ALL","", "DESC");
    
    $(document).on('click', '.searchresult', function(){
        var sortby = document.getElementById("sortby").value;
        var sort = document.getElementById("sort").value;
        var tglawal = document.getElementById("tglawal").value;
        var tglakhir = document.getElementById("tglakhir").value;
        var status = document.getElementById("status").value;
        var bagian = document.getElementById("bagian").value;
        var kategori = document.getElementById("kategori").value;
        var identifikasi = document.getElementById("identifikasi").value;
        var model = document.getElementById("model").value;
        
        var hal = document.getElementsByClassName("pg_result");
        var allrecords = $(this).attr('data-allrecords_result');
        if(hal[0].innerHTML == allrecords){
            var page = allrecords;
        } else {
            var page = parseInt(hal[0].innerHTML);
        }
        
        table_result(page,model,tglawal,tglakhir,status,bagian,kategori,identifikasi, sortby, sort);
        
    });
    
    function table_result(page,model,tglawal,tglakhir,status,bagian,kategori,identifikasi, sortby, sort)
    {
        $.ajax({
            url:"index.php?r=resultakumulasi/paginationresult",
            method:"POST",
            data:{page:page,model:model,tglawal:tglawal,tglakhir:tglakhir,status:status,bagian:bagian,kategori:kategori,identifikasi:identifikasi, sortby:sortby, sort:sort},
            beforeSend: function(){
             $(".page-loader").show();
            },
            success:function(data){
                $('#pagination_data').html(data);
            },
            complete: function(){
             $(".page-loader").hide();
            }
        });
    }
        
    $(document).on('click', '.pagination_next_result', function(){
            var sortby = document.getElementById("sortby").value;
            var sort = document.getElementById("sort").value;
            var tglawal = document.getElementById("tglawal").value;
            var tglakhir = document.getElementById("tglakhir").value;
            var status = document.getElementById("status").value;
            var bagian = document.getElementById("bagian").value;
            var kategori = document.getElementById("kategori").value;
            var identifikasi = document.getElementById("identifikasi").value;
            var model = document.getElementById("model").value;
            
            var hal = document.getElementsByClassName("pg_result");
            var allrecords = $(this).attr('data-allrecords_result');
            
            if(hal[0].innerHTML == allrecords){
                var page = allrecords;
            } else {
                var page = parseInt(hal[0].innerHTML)+1;
            }
            
            if(hal[0].innerHTML != allrecords){
                table_result(page,model,tglawal,tglakhir,status,bagian,kategori,identifikasi, sortby, sort);
            }
        });
        
        $(document).on('click', '.pagination_prev_result', function(){
            var sortby = document.getElementById("sortby").value;
            var sort = document.getElementById("sort").value;
            var tglawal = document.getElementById("tglawal").value;
            var tglakhir = document.getElementById("tglakhir").value;
            var status = document.getElementById("status").value;
            var bagian = document.getElementById("bagian").value;
            var kategori = document.getElementById("kategori").value;
            var identifikasi = document.getElementById("identifikasi").value;
            var model = document.getElementById("model").value;
            
            var hal = document.getElementsByClassName("pg_result");
            var allrecords = $(this).attr('data-allrecords_result');
            
            if(hal[0].innerHTML == allrecords){
                var page = allrecords;
            } else {
                var page = parseInt(hal[0].innerHTML)-1;
            }
            
            if(page != '0'){
                table_result(page,model,tglawal,tglakhir,status,bagian,kategori,identifikasi, sortby, sort);
            }
    });
    
    $(document).on('click', '.pag_last_result', function(){
        var sortby = document.getElementById("sortby").value;
        var sort = document.getElementById("sort").value;
        var tglawal = document.getElementById("tglawal").value;
        var tglakhir = document.getElementById("tglakhir").value;
        var status = document.getElementById("status").value;
        var bagian = document.getElementById("bagian").value;
        var kategori = document.getElementById("kategori").value;
        var identifikasi = document.getElementById("identifikasi").value;
        var model = document.getElementById("model").value;
            
        var hal = document.getElementsByClassName("pg_result");
        var allrecords = $(this).attr('data-allrecords_result');

        hal[0].innerHTML = allrecords;

        table_result(allrecords,model,tglawal,tglakhir,status,bagian,kategori,identifikasi, sortby, sort);
    });
    
    $(document).on('click', '.pagination_first_result', function(){
        var sortby = document.getElementById("sortby").value;
        var sort = document.getElementById("sort").value;
        var tglawal = document.getElementById("tglawal").value;
        var tglakhir = document.getElementById("tglakhir").value;
        var status = document.getElementById("status").value;
        var bagian = document.getElementById("bagian").value;
        var kategori = document.getElementById("kategori").value;
        var identifikasi = document.getElementById("identifikasi").value;
        var model = document.getElementById("model").value;
        
        var page = 1;
         
         table_result(page,model,tglawal,tglakhir,status,bagian,kategori,identifikasi, sortby, sort);
    });
});