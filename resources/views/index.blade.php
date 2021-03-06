<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
 {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
          integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>--}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<div id="app">
  <div class="columns">

    <div class="column">
      <section class="section">
        <div class="columns">


          <div class="column">
            <p class="title is-4">Products</p>

            <table class="table is-hoverable is-striped is-fullwidth">
              <thead>
              <tr>
                <td>id</td>
                <td>name</td>
                <td>category_name</td>
                <td>tags</td>
              </tr>
              </thead>
              <tbody>
              @if($products)
                @foreach($products as $product)
                  <tr class="my-row" style="cursor: pointer;" data-product="{{$product}}">
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->arrayTags}}</td>
                  </tr>
                @endforeach
              @endif
              </tbody>
            </table>
          </div>
        </div>


        <div id="modal-1" class="modal">
          <div class="modal-background"></div>
          <div class="modal-card">
            <header class="modal-card-head">
              <p class="modal-card-title">Pizza Margarita</p>
              <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
              <p>descr: Random description....</p>
              <p>category: <b>category_name</b></p>
              <p>tags: <b>new, hot</b></p>
            </section>
            <footer class="modal-card-foot">
              <button class="button is-success">Save changes</button>
              <button class="button">Cancel</button>
            </footer>
          </div>
        </div>

      </section>
    </div>

  </div>
</div>
<script  src="{{asset('js/app.js')}}"></script>
</body>
</html>