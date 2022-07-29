 <?php
    $master = ['penduduk'];
    ?>
 <li class="nav-item <?= (in_array($active, $master, true)) ? 'menu-open' : '' ?>">
     <a href="#" class="nav-link <?= (in_array($active, $master, true)) ? 'active' : '' ?>">
         <i class="nav-icon icofont-chart-histogram"></i>
         <p>
             MASTER DATA
             <i class="right icofont-rounded-right"></i>
         </p>
     </a>
     <ul class="nav nav-treeview">
         <li class="nav-item">
             <a href="<?= site_url() ?>penduduk" class="nav-link <?= $active == 'penduduk' ? 'active' : '' ?>">
                 <i class="icofont-thin-right"></i>
                 <p>Penduduk</p>
             </a>
         </li>
     </ul>
 </li>