<h2 style="text-align: center">{{ $title }}</h2>
<hr>
<a href="#">Add user</a>

<div>{{$content}}</div>

<div>
    <h3>Users</h3>
    <ul>
        <?php
            if(!empty($listUsers)) {
                foreach($listUsers as $key => $value) {
                    echo "<li>$value</li>";
                }
            }
        ?>
    </ul>
</div>
