<html>

<ul>


<?php require('partials/nav.php'); ?>

<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed): ?>
            <strike>
        <?php endif; ?>

        <?= $task->description; ?> 

        <?php if ($task->completed): ?>
            </strike>  
        <?php endif; ?>  
            
    </li>
<?php endforeach; ?>
</ul>



<FORM method='POST' action='names'>
    <input name='name'>
    <input type='submit'>
</FORM>