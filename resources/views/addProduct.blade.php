
@extends('mainTemplate')

@section('title', 'add product')

@section('content')
  @parent


  <fieldset style="font-size: xx-large; color: black;">
      <legend>add new product:</legend>
      <form method="POST" action="/product/add" id="productInfoForm">

          <label for="title">Title:</label>
          <input type="text" id="title" name="product_title" onchange="focusChangeBorder('title')"><br><br>

          <label for="price">Price:</label>
          <input type="number" id="price" name="product_price" min="0" onchange="focusChangeBorder('price')"><br><br>

          <label for="description">Description:</label>
          <textarea id="description" name="product_description" rows="5" cols="25" onchange="focusChangeBorder('description')"></textarea><br><br>

          <label for="published">published:</label>
          <input type="checkbox" id="published" name="product_published">
      </form>

      <button onclick="sendDate()">add</button>
  </fieldset>


  <script>

      /**
       * check data validation before send them to server
       */
      function checkData(){

          var title = document.getElementById('title');
          var price = document.getElementById('price');
          var description = document.getElementById('description');


          var validation = true;
          var error = 'please enter the product ';

          // check title to be filled
          if(title.value === ''){
              error += 'title, ';
              validation = false;
              title.style.borderColor = 'red';
          }

          // check price to be filled
          if(price.value === ''){
              error += 'price, ';
              validation = false;
              price.style.borderColor = 'red';
          }

          //  check description to be filled
          if(description.value === ''){
              error += 'description';
              validation = false;
              description.style.borderColor = 'red';
          }

          if(!validation){
              alert(error);
          }

          return validation;
      }

      /**
       * handle sending data to server
       */
      function sendDate(){
          if(checkData()){
              document.getElementById('productInfoForm').submit();
          }
      }

      /**
       * change input element border color when user change the mistake
       *  @parameters string elementName
       */
      function focusChangeBorder(elementName){
          document.getElementById(elementName).style.borderColor = "white";
      }

  </script>

@endsection
