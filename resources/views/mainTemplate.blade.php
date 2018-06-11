
 <!DOCTYPE html>
 <html>
  <head>
    <title>@yield('title')</title>
  </head>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <style>

    body {
        background-color: #c9c9c9;
        color: #e3e3e3;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        margin: 0px;
    }

    /* ***************** header ***************** */
    #header_div li{
      float: left;
    }

    #header_div li a {
        display: block;
        color: white;
        text-align: center;
        padding: 0px  40px;
        text-decoration: none;
        font-size: x-large;
    }

    #header_div li a:hover {
      background-color: #fb70709e;
    }

    #header_div ul{
      list-style-type: none;
      overflow: hidden;
      background-color: #ff3a3a9e;
      display: flow-root;
      padding: 2px;
      margin: 0px;
    }

    /* ***************** content ***************** */
    #content_div{
      overflow: hidden;
    }

    /* **** left menu **** */
    #content_left_div{
      float: left;
      padding: 1%;
      background-color: #7756cc;
      color: white;
    }

    #content_left_div li a{
      color: white;
      text-align: center;
      padding: 2px 0px;
      text-decoration: none;
    }

    #content_left_div li a:hover{
      color: #fcff75;
    }

    #content_left_div li{
      padding: 2px 0px;
    }

    #content_left_div ul{
      list-style-type: none;
      padding: 1px;
    }

    /* **** main content **** */
    #content_right_div{
      float: left;
      padding: 1%;
    }

    /* ***************** fotter ***************** */
    #fotter_div{
      padding: 1% 5%;
      margin: 0px;
      background-color: #89bdd3;
    }

  </style>

  <body>
    <!--************ Header ************-->
    <div class="pageRow" id="header_div">
        <ul id="header_list">
          <li><a href="/">Home</a></li>
          <li><a href="/number">Numbers</a></li>
          <li><a href="/course/add">add course</a></li>
          <li><a href="/getname">Name</a></li>
        </ul>
    </div>

    <!--************ Content ************-->
    <div class="pageRow" id="content_div">

      <!--************ left menu ************-->
      <div id="content_left_div">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/number">Numbers</a></li>
          <li><a href="/course/add">add course</a></li>
          <li><a href="/getname">Name</a></li>
        </ul>
      </div>

      <!--************ main content ************-->
      <div id="content_right_div">
        @section('content')
        @show
      </div>

    </div>

    <!--************ Fotter ************-->
    <div class="pageRow" id="fotter_div">
        <p>All text, graphics, user interfaces, visual interfaces, photographs,
          trademarks, logos, sounds, music, artwork and computer code
          (collectively, "Content"), including but not limited to the design,
          structure, selection, coordination, expression, "look and feel" and
          arrangement of such Content, contained on the Site is owned,
          controlled or licensed by or to Apple, and is protected by trade dress
          , copyright, patent and trademark laws, and various other intellectual
           property rights and unfair competition laws.</p>
    </div>

  </body>

 </html>
