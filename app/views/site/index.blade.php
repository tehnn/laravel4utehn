{{date('Y-m-d H:i:s')}}

<ul>
    <li>{{ HTML::linkAction('MyController@show', 'Link1', array('id' =>date('his'))) }}</li>
    <li><a href="{{ URL::to('show2') }}">Link2</a></li>
    <li><a href="{{ URL::to('tehn') }}">Link3</a></li>
</ul>
<form action="post" method="post">
    <input type="text" name="name">
    <input type="submit"> 
</form>