
$(document).ready(function(){
    getData();
     getTotal();
    count()
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
   });

   // count();
   function count(){
            var myproduct=localStorage.getItem('product');
            if(myproduct){
              var myproduct_obj=JSON.parse(myproduct);
              if(myproduct_obj!=0){
                var count=myproduct_obj.length;
               
               
                $("#cartNoti").html(count);
              }else{
                $("#cartNoti").html(0);
              }

            }
            else{
              $("#cartNoti").html(0);

            }

          };
       
    $('.add_to_cart').click(function(){

        var id=$(this).data('id');
        var name=$(this).data('name');
        var price=$(this).data('price');
        var photo=$(this).data('photo');
        var codeno=$(this).data('codeno');
        
        //console.log(id);
        

         var item={id:id,name:name,price:price,photo:photo,codeno:codeno,qty:1};
         // console.log(item);
        var oldproduct=localStorage.getItem('product');
        if(oldproduct == null){
            var product= new  Array();
        }else{
            var product=JSON.parse(oldproduct);

        }
        var exit;
        $.each(product,function (i,v) {
            if(id==v.id){
                v.qty++;
                exit=true;
            }
        })
        if(!exit){
            product.push(item);
        }

        localStorage.setItem('product', JSON.stringify(product));
        getData();     
    })
    
    function getData(){
        var myproduct=localStorage.getItem('product');
        
        var  table=$('#shoppingcart_table');
        var result='';
        if(myproduct!=null){
            product=JSON.parse(myproduct);
           // var total=0;
    
            $.each(product,function (i,v) {
                subtotal=v.price*v.qty;
                
                // dis=v.price*v.discount/100;
                // subtotol2=subtotal1-dis*v.qty;
                // total+=subtotol;

               
                result+=`
                       <tr class="text-center">
                                <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
                                
                                <td class="image-prod"><img src='${v.photo}' width='100' height='100'></td>
                                
                                <td class="product-name">
                                    <h3>${v.name}</h3>
                                    <p>${v.codeno}</p>
                                </td>
                                
                                <td class="price">${v.price}</td>
                                
                              <td>
                                <button class="btn btn-outline-secondary plus_btn" data-id="${i}"> 
                                    <i class="fa fa-plus-circle" style="font-size:48px;"></i>
                                </button>
                            </td>
                            <td>
                                <p> ${v.qty}</p>
                            </td>
                            <td>
                                <button class="btn btn-outline-secondary minus_btn" data-id="${i}"> 
                                    <i class="fa fa-minus-circle" style="font-size:48px;"></i>
                                </button>
                            </td>
                            <td colspan="3">
                            <p>    ${subtotal}</p>
                            </td>

                                
                              </tr>
                        `;
                       
            })
        }
        //console.log(result);
        table.html(result);
        
        
    }


    // check total
    function getTotal(){


        var myproduct=localStorage.getItem('product');
        
        var table=$('#totalprice');
        var dis=$('#discount');
        var all=$('#alltotal');
        
        if(myproduct!=null){
            product=JSON.parse(myproduct);
           var total=0;
            var subtotol = 0;
            $.each(product,function (i,v) {
                subtotol = v.price*v.qty;
                
                // dis=v.price*v.discount/100;
                // subtotol2=subtotal1-dis*v.qty;
                 total+= subtotol; 
                 
               
            })

        }

      table.html(total);
      if(total>10000){
        var discount = total*0.05;
        dis.html(discount);
        var alltotal = total-discount;
        all.html(alltotal);



      }else {
        table.html(total);
        dis.html(0);
        all.html(total);

      }

        }
       
    


    // end check total
     $('#shoppingcart_table').on('click','.plus_btn',function() {
                
                var id=$(this).data('id');

                var myproduct=localStorage.getItem('product');
                var product=JSON.parse(myproduct);
                $.each(product,function(i,v){
                    if(i==id){
                        v.qty++;
                    }
                })
                localStorage.setItem('product', JSON.stringify(product));
                getData();
                //count();
                getTotal();
                
            })
      $('#shoppingcart_table').on('click','.minus_btn',function () {
                
                var id=$(this).data('id');

                var myproduct=localStorage.getItem('product');
                var product=JSON.parse(myproduct);
                
                $.each(product,function(i,v){
                    if(i==id ){
                        v.qty--;
                    }
                })
                localStorage.setItem('product', JSON.stringify(product));
                getData();
                getTotal();
               //count();
            })
      $('#shoppingcart_table').on('click','.product-remove',function () {


                let index=$(this).data('id');
                var myproduct=localStorage.getItem('product');
                product=JSON.parse(myproduct);
                //localStorage.removeItem(index,1);
                product.splice(index,1);

                localStorage.setItem('product', JSON.stringify(product));
                getData();
                count();
                getTotal();
            })
     

      // $('.buy_now').on('click',function(){
      //   var notes=$('#notes').val();
      //   if(notes==''){
      //       alert('Please fill request message!');
      //   }else{
      //       var shopString=localStorage.getItem("product");
      //       if(shopString){
      //       $.post('/orders',{shop_data:shopString,notes:notes},function(response){
      //           if(response){
      //               alert(response);
      //               localStorage.clear();
      //               getData();
      //               location.href="/";
      //           }
      //       })   
      //       }
        
      //   }
      // })
         
         $('.buy_now').on('click',function(){
          var shopString=localStorage.getItem("product");
          if(shopString){
            $.post('/orders',{shop_data:shopString},function(response){
              if(response){
                alert(response);
                localStorage.clear();
                getData();
                location.href="/";
              }
            })

          }
         })
    
})