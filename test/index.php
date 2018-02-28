<!DOCTYPE html>
<html lang="en">
<head>
  <style media="screen">

  .row {
    max-width: 800px;
    margin: 0 auto;
    padding: 60px 30px;
    background: #032429;
    position: relative;
    z-index: 1;
    text-align: center;
  }
  .row:before {
    position: absolute;
    content: "";
    display: block;
    top: 0;
    left: -5000px;
    height: 100%;
    width: 15000px;
    z-index: -1;
    background: inherit;
  }
  .row:first-child {
    padding: 40px 30px;
  }
  .row:nth-child(2), .row:nth-child(8), .row:nth-child(10) {
    background: #134A46;
  }
  .row:nth-child(3), .row:nth-child(7) {
    background: #377D6A;
  }
  .row:nth-child(4), .row:nth-child(6) {
    background: #7AB893;
  }
  .row:nth-child(5) {
    background: #B2E3AF;
  }
  .row span {
    position: relative;
    display: inline-block;
    margin: 30px 10px;
  }

  .basic-slide {
    display: inline-block;
    width: 215px;
    padding: 10px 0 10px 15px;
    font-family: "Open Sans", sans;
    font-weight: 400;
    color: #377D6A;
    background: #efefef;
    border: 0;
    border-radius: 3px;
    outline: 0;
    text-indent: 70px;
    transition: all .3s ease-in-out;
  }
  .basic-slide::-webkit-input-placeholder {
    color: #efefef;
    text-indent: 0;
    font-weight: 300;
  }
  .basic-slide + label {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 15px;
    text-shadow: 0 1px 0 rgba(19, 74, 70, 0.4);
    background: #7AB893;
    transition: all .3s ease-in-out;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
  }

  .basic-slide:focus,
  .basic-slide:active {
    color: #377D6A;
    text-indent: 0;
    background: #fff;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .basic-slide:focus::-webkit-input-placeholder,
  .basic-slide:active::-webkit-input-placeholder {
    color: #aaa;
  }
  .basic-slide:focus + label,
  .basic-slide:active + label {
    transform: translateX(-100%);
  }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script type="text/javascript" src="script.js">

  </script>
  <title>Document</title>
</head>
<body>
  <h1>Script JS</h1>
  <div class="row">
  <span>
    <input class="basic-slide" id="name" type="text" placeholder="Your best name" /><label for="name">Name</label>
  </span>
  </div>
</body>
</html>
