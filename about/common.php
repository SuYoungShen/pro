<?php

  function AboutSe()
  {
    $about = "SELECT * From `about`";
    return $about;
  }

  function CarouselSe()
  {
    $carousel = "SELECT * From `carousel`";
    return $carousel;
  }

  // function CarouselUp(&$carousel_name, &$carouselDir, &$datetime, &$key)
  // {
  //
  //   $topup = "UPDATE carousel SET
  //                     name = '".$carousel_name."',
  //                     path = '".$carouselDir."',
  //                     datetime = '".$datetime."'
  //                   WHERE
  //                     id = '".$key."'
  //                   ";
  //   return $topup;
  // }
  //
  // function message($value, $Basename){
  //   echo "
  //   <script>
  //     var value ='$value';
  //     var basename= '$Basename';
  //     alerts(value, basename);
  //   </script>
  //   ";
  // }
  //
  // function topse()
  // {
  //   $topse = "SELECT * From top";
  //   return $topse;
  // }

  function PlaceSe(){
    $placeSe = "SELECT * From `place`";
    return $placeSe;
  }
  //
  // function PlaceUp(){
  //
  //   $placeUp="UPDATE `place` SET
  //                           `place`=[value-1],
  //                           `Introduction`=[value-2],
  //                           `name`=[value-3],
  //                           `path`=[value-4],
  //                           `datetime`=[value-5]
  //                           WHERE 1
  //                           ";
  //   return $placeUp;
  // }
  //
  // function PlaceIn($placeName,$Introduction,$pic_Name,$placeDir,$datetime)
  // {
  //   $placeIn ="INSERT INTO `place`
  //                         (`place`,`Introduction`,`name`,`path`,`datetime`)
  //                         VALUES
  //                         (
  //                           '".$placeName."',
  //                           '".$Introduction."',
  //                           '".$pic_Name."',
  //                           '".$placeDir."',
  //                           '".$datetime."'
  //                         )";
  //   return $placeIn;
  // }
  //
  // function PlaceDe($placeName)
  // {
  //   $AboutDe ="DELETE FROM `place`
  //                     WHERE place=
  //                                 '".$placeName."'
  //                                 ";
  //   return $AboutDe;
  // }


 ?>
