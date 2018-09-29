<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test[]|\Cake\Collection\CollectionInterface $tests
 */
?>

<div class="tests index large-9 medium-8 columns content">
    <h3><?= __(' Theory Tests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            
        </thead>
        <tbody>
            <?php foreach ($tests as $test): ?>
            <!--<tr>
                <td><?= $this->Number->format($test->TestNo) ?></td>
                <td><?= h($test->Question) ?></td>
				<td><?= h($test->Question) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $test->TestNo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $test->TestNo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $test->TestNo], ['confirm' => __('Are you sure you want to delete # {0}?', $test->TestNo)]) ?>
                </td>
            </tr>-->
            <?php endforeach; ?>
			
			<?= $this->Form->create($test) ?>
				<fieldset>
				
					<?php 
						echo $this->Form->label('Question',$Question);
						echo $this->Form->radio('option',$option);

						echo $this->Form->label('Question1',$Question1);
						echo $this->Form->radio('option1',$option1);
						
						echo $this->Form->label('Question2',$Question2);
						echo $this->Form->radio('option2',$option2);
						
					?>
					
				</fieldset>
				<?= $this->Form->button(__('Submit')) ?>
				<?= $this->Form->end() ?>
				
				<?php
				  /*foreach ($results as $row):
					 echo "<tr><td>".$row->Answer."</td>";
					 
					
				  endforeach;*/
			   ?>
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
