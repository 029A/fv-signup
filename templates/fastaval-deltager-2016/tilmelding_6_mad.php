<?php
    
    class DeltagerTilmeldingMadPage6 extends SignupPage
    {
        public function init()
        {
        }
        
        public function canShow()
        {
            return true;
        }
        
        public function get_age(){
            $year = $_SESSION['customer']['birthday-year']*1;
            $day = $_SESSION['customer']['birthday-day']*1;
            $month = $_SESSION['customer']['birthday-month']*1;
            $age = 100;
            
            if (is_numeric($year)&&is_numeric($month)&&is_numeric($day))
            {
                $birthDate = $year."-".($month<10?"0":"").$month."-".($day<10?"0":"").$day;
                # object oriented
                $from = new DateTime($birthDate);
                $to   = new DateTime('today');
                return $from->diff($to)->y;
            }
            return $age;
        }
        
        
        public function attends_con_at_numday($numday){
            if (isset($_SESSION['customer']['days_all']))
                if ($_SESSION['customer']['days_all']==1)
                    return true;
            
            if (isset($_SESSION['customer']['days_'.$numday]))
                if ($_SESSION['customer']['days_'.$numday]==1)
                    return true;
            
            return false;
        }
        
        public function render()
        {s
            ?>
        	<form method="post" action="<?php echo get_previous_step_name();?>" class='prev-form'>
                <?php tilm_form_prev_fields(); ?>
                <?php render_previous_button("general_previous_page");?>
        	</form>
        	
        	<form method="post" action="<?php echo get_next_step_name();?>" onSubmit='return validate_form(this);'>
                <?php render_next_button("general_next_page");?>
                <?php tilm_form_prefields(); ?>
                
                <h1 class='entry-title'><?php __etm('nocat_1');?></h1>
                <div id='tilmelding-info'>
                    
                    <p><?php __etm('nocat_151');?></p>
                    <p><?php __etm('nocat_152');?></p>
                    
                    <?php if ($this-> attends_con_at_numday(1)){?>
                    <h3><?php __etm('nocat_2');?></h3>
                    <p><?php __etm('nocat_153');?></p>
                    <?php
        			renderFieldByType(array(
            			'id'=>'brainfood_dinner_1',
            			'input-type'=>'select',
            			'input-name'=>'brainfood_dinner_1',
            			'text'=>'',
            			'value' => array(
                        			'0'=>'nocat_154',
                        			'145'=>'nocat_155',
                        			'150'=>'nocat_156',
                            ),
        			));
                    ?>
                    
                    <ul>
                        <li><?php __etm('nocat_157');?></li>
                        <li><?php __etm('nocat_158');?></li>
                    </ul>
                    <?php } if ($this-> attends_con_at_numday(2)){?>
                    
                    <h3><?php __etm('nocat_3');?></h3>
                    <p><?php __etm('nocat_159');?></p>
                    <?php
        			renderFieldByType(array(
            			'id'=>'breakfast_2',
            			'input-type'=>'select',
            			'input-name'=>'breakfast_2',
            			'text'=>'',
            			'value' => array(
                        			'0'=>'nocat_154',
                        			'160'=>'nocat_155'
                            ),
        			));
                    ?>
                    <p><?php __etm('nocat_153');?></p>
                    <?php
        			renderFieldByType(array(
            			'id'=>'brainfood_dinner_2',
            			'input-type'=>'select',
            			'input-name'=>'brainfood_dinner_2',
            			'text'=>'',
            			'value' => array(
                        			'0'=>'nocat_154',
                        			'146'=>'nocat_155',
                        			'151'=>'nocat_156',
                            ),
        			));
                    ?>
                    <ul>
                        <li><?php __etm('nocat_160_1');?></li>
                        <li><?php __etm('nocat_161');?></li>
                    </ul>
                    
                    <?php } if ($this-> attends_con_at_numday(3)){?>
                    
                    <h3><?php __etm('nocat_4');?></h3>
                    <p><?php __etm('nocat_159');?></p>
                    <?php
        			renderFieldByType(array(
            			'id'=>'breakfast_3',
            			'input-type'=>'select',
            			'input-name'=>'breakfast_3',
            			'text'=>'',
            			'value' => array(
                        			'0'=>'nocat_154',
                        			'161'=>'nocat_155'
                            ),
        			));
                    ?>
                    <p><?php __etm('nocat_153');?></p>
                    <?php
        			renderFieldByType(array(
            			'id'=>'brainfood_dinner_3',
            			'input-type'=>'select',
            			'input-name'=>'brainfood_dinner_3',
            			'text'=>'',
            			'value' => array(
                        			'0'=>'nocat_154',
                        			'147'=>'nocat_155',
                        			'152'=>'nocat_156',
                            ),
        			));
                    ?>
                    <ul>
                        <li><?php __etm('nocat_162');?></li>
                        <li><?php __etm('nocat_163');?></li>
                    </ul>
                    
                    <?php } if ($this-> attends_con_at_numday(4)){?>
                    <h3><?php __etm('nocat_5');?></h3>
                    <p><?php __etm('nocat_159');?></p>
                    <?php
        			renderFieldByType(array(
            			'id'=>'breakfast_4',
            			'input-type'=>'select',
            			'input-name'=>'breakfast_4',
            			'text'=>'',
            			'value' => array(
                        			'0'=>'nocat_154',
                        			'162'=>'nocat_155'
                            ),
        			));
                    ?>
                    <p><?php __etm('nocat_153');?></p>
                    <?php
        			renderFieldByType(array(
            			'id'=>'brainfood_dinner_4',
            			'input-type'=>'select',
            			'input-name'=>'brainfood_dinner_4',
            			'text'=>'',
            			'value' => array(
                        			'0'=>'nocat_154',
                        			'148'=>'nocat_155',
                        			'153'=>'nocat_156',
                            ),
        			));
                    ?>
                    <ul>
                        <li><?php __etm('nocat_164');?>.</li>
                        <li><?php __etm('nocat_165');?></li>
                    </ul>
                    
                    <?php } if ($this-> attends_con_at_numday(5)){?>
                    <h3><?php __etm('nocat_6');?></h3>
                    <p><?php __etm('nocat_159');?></p>
                    <?php
        			renderFieldByType(array(
            			'id'=>'breakfast_5',
            			'input-type'=>'select',
            			'input-name'=>'breakfast_5',
            			'text'=>'',
            			'value' => array(
                        			'0'=>'nocat_154',
                        			'163'=>'nocat_155'
                            ),
        			));
                    ?>
                    <p><?php __etm('nocat_153');?></p>
                    <?php
        			renderFieldByType(array(
            			'id'=>'brainfood_dinner_5',
            			'input-type'=>'select',
            			'input-name'=>'brainfood_dinner_5',
            			'text'=>'',
            			'value' => array(
                        			'0'=>'nocat_154',
                        			'149'=>'nocat_155',
                        			'154'=>'nocat_156',
                            ),
        			));
                    ?>
                    <ul>
                        <li><?php __etm('nocat_166');?></li>
                        <li><?php __etm('nocat_167');?></li>
                    </ul>
                    <?php }?>
                    
                    
                    <?php 
                        if ($this->get_age()<16)
                        {
                            // nooothing
                        }
                        else if ($this->get_age()<18)
                        {
                            ?>
                            <h2><?php __etm('nocat_168');?></h2>
                            <p><?php __etm('nocat_169');?></p>
                            <p><?php __etm('nocat_170');?></p>
                            <?php
                			renderFieldByType(array(
                    			'id'=>'otto_party',
                    			'input-type'=>'select',
                    			'input-name'=>'otto_party',
                    			'text'=>'nocat_171',
                    			'value' => array(
                        			'0' => 'nocat_154',
                        			'1' => 'nocat_172',
                    			),
                    			'class'=> array('fullsize-label quickfix-for-idiot-window-machine'),
                			));
                        }
                        else
                        {
                            ?>
                            <h2><?php __etm('nocat_168');?></h2>
                            <p><?php __etm('nocat_169');?></p>
                            <p><?php __etm('nocat_170');?></p>
                            <?php
                			renderFieldByType(array(
                    			'id'=>'otto_party',
                    			'input-type'=>'select',
                    			'input-name'=>'otto_party',
                    			'text'=>'nocat_171',
                    			'value' => array(
                        			'0' => 'nocat_154',
                        			'1' => 'nocat_172',
                        			'2' => 'nocat_173',
                        			'3' => 'nocat_173_2',
                        			'4' => 'nocat_173_3',
                    			),
                    			'class'=> array('fullsize-label','quickfix-for-idiot-window-machine'),
                			));
                        }
                    ?>
                </div>
                <style>
                    .quickfix-for-idiot-window-machine select{
                        width:50% !important;
                        min-width:50% !important;
                    }
                    
                </style>
                <?php tilm_form_postfields(); ?>
                <?php render_next_button("general_next_page");?>
        	</form>
        	
        	<form method="post" action="<?php echo get_previous_step_name();?>" class='prev-form'>
                <?php tilm_form_prev_fields(); ?>
                <?php render_previous_button("general_previous_page");?>
        	</form>
        	<?php

        }
    }


