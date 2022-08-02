 <aside class="main-sidebar" style="background-color:#0000ff">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>uploads/base-img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $users_name; ?></p>
              <i class="fa fa-circle text-success"></i> <?php echo $groups_name; ?>
            </div>
        </div>
        <ul class="sidebar-menu">
            <!-- <li class="header">Main Menu</li> -->

            <?php 
              foreach ($menus as $menus_entry) {

                if($menus_entry->menus_submenus_status == "No"){

                  $menus_rules = json_decode($menus_entry->menus_groups_rules, true);

                  if (in_array($access_groups, $menus_rules)){

                  $url_segment1 = $this->uri->segment(1);
                  $url_segment2 = $this->uri->segment(2);

                  $url_segment = $url_segment1."/".$url_segment2;

                  if ($url_segment == $menus_entry->menus_controller){
                    $active = "active";
                  } else {
                    $active = "";
                  }

            ?>  
                <li class="<?php echo $active; ?>"><a href="<?php echo site_url($menus_entry->menus_controller); ?>"><i class="fa <?php echo $menus_entry->menus_favicon; ?>"></i> <span><?php echo $menus_entry->menus_name; ?></span></a></li>

            <?php
                  }

                } else if($menus_entry->menus_submenus_status == "Header"){
                    $menus_rules = json_decode($menus_entry->menus_groups_rules, true);

                    if (in_array($access_groups, $menus_rules)){
            ?>
                    <li class="header"><?php echo $menus_entry->menus_name; ?></li>
            <?php 
                    }
                } else {

                  $menus_rules = json_decode($menus_entry->menus_groups_rules, true);

                  if (in_array($access_groups, $menus_rules)){

                  $url_segment1 = $this->uri->segment(1);
                  $url_segment2 = $this->uri->segment(2);

                  $url_segment = $url_segment1."/".$url_segment2;

                  if ($url_segment == $menus_entry->menus_controller){
                    $active = "active";
                  } else {
                    $active = "";
                  }

                  $this->load->model('Website/groups_model');
                  @$submenus = $this->groups_model->get_submenus($menus_entry->id_backend_menus);

            ?>
                <li class="treeview <?php echo $active; ?>">
                  <a href="#">
                    <i class="fa <?php echo $menus_entry->menus_favicon ?>"></i> <span><?php echo $menus_entry->menus_name ?></span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
            <?php 
              foreach ($submenus as $submenus_entry) {  

                $submenus_rules = json_decode($submenus_entry->submenus_groups_rules, true);

                if (in_array($access_groups, $submenus_rules)){

                $url_segment_sub = $this->uri->segment(3);
                  if ($url_segment_sub == $submenus_entry->submenus_controller){
                    $active_sub = "active";
                  } else {
                    $active_sub = "";
                  }

            ?>
                    <li class="<?php echo $active_sub; ?>"><a href="<?php echo site_url($menus_entry->menus_controller.'/'.$submenus_entry->submenus_controller);?>"><?php echo $submenus_entry->submenus_name; ?></a></li>
            <?php 
                }
              }
            ?>
                  </ul>        
                </li>
            <?php
                  }
                }
              }
            ?> 

      
        </ul>
    </section>
  </aside>