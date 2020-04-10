<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #111;
    }

    .active {
        background-color: #4CAF50;
    }

    .notactive {
        background-color: orangered;
    }
</style>

<div>
    <ul>
        <li><a class="<?php echo uri_string() == 'dashboard' ? 'active' : '' ?>" href="/dashboard"> Home </a></li>
        <li><a class="<?php echo uri_string() == 'about' ? 'active' : '' ?>" href="/about">About </a></li>
    </ul>
</div>