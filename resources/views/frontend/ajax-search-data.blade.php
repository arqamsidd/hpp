<style>
  .search-box {
    width: 100%;
    position: relative;
    display: inline-block;
    font-size: 14px;
  }

  .search-box input[type="text"] {
    height: 32px;
    padding: 5px 10px;
    border: 1px solid #CCCCCC;
    font-size: 14px;
  }

  .result {
    z-index: 999;
    top: 100%;
    left: 0;
    background: #ffffff;
  }

  .search-box input[type="text"],
  .result {
    width: 100%;
    box-sizing: border-box;

  }

  .result p {
    margin: 0;
    padding: 7px 10px;
    border: 1px solid #CCCCCC;
    border-top: none;
    cursor: pointer;
    background: #ffffff;
  }

  .result p:hover {
    background: #f2f2f2;
  }
</style>
<ul>
  <?php
  if (!empty($searchResult)) {
    foreach ($searchResult as $row) {
  ?>
      <li>
        <a href="{{url('').'/'.$row->slug}}">{{$row->name}}</a>
      </li>

  <?php }
  } else {
    echo "No record found.";
  } ?>

</ul>