<ul> 
<?php 
    foreach($profile as $prof ){
       echo  "<li>".$prof->nom."</li>" ;
    }
 ?>

    <hr>
    @foreach($profile as $prof )
    <li>{{$prof->nom}} {{$prof->prenom}} {{$prof->email}}</li>
    @endforeach

</ul>