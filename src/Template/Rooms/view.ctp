<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($room->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($room->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
        </table>
<div class="related">
    <?php if (!empty($room->showtimes)): ?>
    <h4><?= __('Related Showtimes') ?></h4>
    <table>
        <tr>
            <th scope="col"><?= __('Id') ?></th>
            <th scope="col"><?= __('Movie Id') ?></th>
            <th scope="col"><?= __('Room Id') ?></th>
            <th scope="col"><?= __('Start') ?></th>
            <th scope="col"><?= __('End') ?></th>
            <th scope="col"><?= __('Created') ?></th>
            <th scope="col"><?= __('Modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($room->showtimes as $showtime): ?>
            <tr>                
                <td><?= h($showtime->id) ?></td>
                <td><?= h($showtime->movie_id) ?></td>
                <td><?= h($showtime->room_id) ?></td>
                <td><?= h($showtime->start) ?></td>
                <td><?= h($showtime->end) ?></td>
                <td><?= h($showtime->created) ?></td>
                <td><?= h($showtime->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Showtimes', 'action' => 'view', $showtime->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Showtimes', 'action' => 'edit', $showtime->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Showtimes', 'action' => 'delete', $showtime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $showtime->id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
    
</div>
