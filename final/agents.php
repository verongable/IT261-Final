<?php
include('config.php');
session_start();
include('includes/header.php');
?>

<div id="wrapper">
    <main class="featured">
        <h1><?php echo $headline;?></h1>
        <img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
        <h2><?php echo $agent;?></h2>
        <?php echo $content;?>
    </main>

    <aside class="agents">
        <h2>Meet the Rest of Our Agents</h2>
        <ul>
            <li><a href="agents.php?today=Tuesday">Julie Bennett</a></li>
            <li><a href="agents.php?today=Wednesday">Solomon Alabi</a></li>
            <li><a href="agents.php?today=Thursday">Dehlan Gwo</a></li>
            <li><a href="agents.php?today=Friday">George Beasley</a></li>
            <li><a href="agents.php?today=Saturday">Shandi Boyle</a></li>
            <li><a href="agents.php?today=Sunday">Lino Guidero</a></li>
            <li><a href="agents.php?today=Monday">Melanie Beasley</a></li>
        </ul>
    </aside>
</div>

<?php include('includes/footer.php');?>