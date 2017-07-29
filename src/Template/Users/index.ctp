<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<<<<<<< HEAD
<nav class="large-3 medium-4 columns" id="actions-sidebar">
=======
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Tables') ?></li>
        <li><?= $this->Html->link(__('Genre'), ['controller'=>'Genre','action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Image'), ['controller'=>'Images','action' => 'index']) ?> </li>
    </ul>
>>>>>>> 5b5709bd7be5c19747478b9c97bad4915736a305
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<<<<<<< HEAD
<div class="users index large-9 medium-8 columns content">
=======
<div class="users index large-10 medium-8 columns content">
>>>>>>> 5b5709bd7be5c19747478b9c97bad4915736a305
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registered_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_login_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salt') ?></th>
<<<<<<< HEAD
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
=======
>>>>>>> 5b5709bd7be5c19747478b9c97bad4915736a305
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
<<<<<<< HEAD
                <td><?= $user->has('user') ? $this->Html->link($user->user->user_id, ['controller' => 'Users', 'action' => 'view', $user->user->user_id]) : '' ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->registered_date) ?></td>
                <td><?= h($user->last_login_date) ?></td>
                <td><?= h($user->token) ?></td>
                <td><?= h($user->salt) ?></td>
                <td><?= $this->Number->format($user->role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
=======
                <td><?= $this->Number->format($user->user_id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= date('Y-m-d G:i:s',strtotime($user->registered_date)) ?></td>
                <td><?= date('Y-m-d G:i:s',strtotime($user->last_login_date)) ?></td>
                <td><?= h($user->token) ?></td>
                <td><?= h($user->salt) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->userID)]) ?>
>>>>>>> 5b5709bd7be5c19747478b9c97bad4915736a305
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
