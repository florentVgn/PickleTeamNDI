<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view("modules/head", $head); ?>
<?php $this->load->view("modules/menu"); ?>

<div id="title">
    <h1>Adopte un SAM<span class="beta">Le moyen sûr de rentrer après une soirée</span></h1>
    <button class="dl" style="pointer-events: none">Créer un événement</button>
</div>

<div id="content">
    <div id="main">
        <img id="imgTeam" src="<?php echo base_url().'assets/img/imageTeam.jpg' ?>" alt="image equipe">
       <table>
           <tr><td>
                   <h3>Mathis Perrier<br>'Thismarin'</h3>

                   <div class="square">

                   </div>
               </td>
               <td>
                   <h3>Axelle Delomez<br>'Yui'</h3>

                   <div class="square">

                   </div>
               </td>
               <td>
                   <h3>Boris Weber<br>'Pudding'</h3>

                   <div class="square">

                   </div>
               </td>
           </tr>

           <tr><td>
                   <h3>Claire Caparros<br>'L'insurmontable'</h3>

                   <div class="square">

                   </div>
               </td>
               <td>
                   <h3>Adrien Arsac<br>'La machine'</h3>

                   <div class="square">

                   </div>
               </td>
               <td>
                   <h3>Rayan Barama<br>'Rayanou'</h3>

                   <div class="square">

                   </div>
               </td>
           </tr>
           <tr><td>
                   <h3>Rémi Gavin<br>'Babar'</h3>

                   <div class="square">

                   </div>
               </td>
               <td>
                   <h3>Mathieu Aubé<br>'Chefigniter'</h3>

                   <div class="square">

                   </div>
               </td>
               <td>
                   <h3>Guillaume Marmorat<br>'Tonneau'</h3>

                   <div class="square">

                   </div>
               </td>
           </tr>
           <tr><td>
                   <h3>Jeremie Chantharath<br>'L'agressif'</h3>

                   <div class="square">

                   </div>
               </td>
               <td>
                   <h3>Florent Viogne<br>'Major'</h3>

                   <div class="square">

                   </div>
               </td>
               <td>
                   <h3>Alexis Perrichon<br>'Touriste'</h3>

                   <div class="square">

                   </div>
               </td>
           </tr>
       </table>
    </div>
</div>


<?php $this->load->view("modules/footer"); ?>
<?php $this->load->view("modules/foot"); ?>