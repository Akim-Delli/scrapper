<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'eServices: Project Cost Tracker');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('favicon');

		// echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->Html->css('select2');
		echo $this->Html->css('eservices.main');
		echo $this->Html->css('eservices.grey');
		echo $this->Html->css('uniform');

        //echo $this->element('sql_dump'); 
 		echo $this->Html->script('jquery-1.9.1.min');
 		echo $this->Html->script('jquery.ui.custom');
 		echo $this->Html->script('jquery.uniform');

		// echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js');
        //echo $this->Html->script('bootstrap');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('select2.min');
        echo $this->Html->script('eservices');
        
	


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

        //Highcharts Libraries
        echo $this->Html->script('http://code.highcharts.com/highcharts.js'); 
        echo $this->Html->script('http://code.highcharts.com/modules/exporting.js');
        //JGrowl
        echo $this->Html->script('http://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.2.12/jquery.jgrowl.min.js');
        echo $this->Html->css('http://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.2.12/jquery.jgrowl.min.css');
	?>
</head>
<body>
	
	
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="sidebar">
			<ul style="display: block;">
            
            	<li class="active"><a class="ajaxify" href='/dashboard/index'><i class="icon icon-home"></i><span>Dashboard</span></a></li>
            	<li class="submenu">
            			<a class="ajaxify" href='#'>
            				<i class="icon icon-briefcase"></i>
            				<span>Projects</span>
            			</a>
	            		<ul>
	            			<li>
	            				<a href='/projects/add'>New Project</a>
	            			</li>
	            			<li>
	            				<a href='/projects/index'>		List Projects</a>
	            			</li>
	            			
	            		</ul>
	            </li>

            	<li><a href='/costs/index'><i class="icon icon-tasks"></i><span>Project TimeSheet</span></a></li>
                
                <li class="submenu">
                	<a href='#'>
                		<i class="icon icon-user"></i>
                		<span>Team Members</span>
                	</a>
                	
                	<ul>
	            		<li>
	            			<a href='/users/add'>New Team Member</a>
	            		</li>
	            		<li>
	            			<a href='/users/index'>Team Members List</a>
	            		</li>
	            	</ul>
	            </li>
                <li><a href=""><i class="icon icon-calendar"></i><span>Calendar</span></a></li>
            </ul>
            		
            	
        </div>
		<div id="content">
            <div id="content-header">
                <h1></h1>
            </div>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('logo_ipro.png', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.ipro.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
</body>
</html>
