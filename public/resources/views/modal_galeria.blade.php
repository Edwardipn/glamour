<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title title_modal text-dark" id="exampleModalLabel"></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

          <div class="carousel-inner" id="imagen-carrucel">
            

          </div>

          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

          </a>

          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

          </a>

        </div>

      </div>

    </div>

  </div>

</div>



<script type="text/javascript">

  $(document).ready(function()

  {

    $(".select-modal-imagen").click(function()

    {

      let nombre = $(this).data("nombre");

      let cantidad = $(this).data("cantidad");      

      let src ="";

      let imagen = "";

      for (var i = 1; i <= cantidad; i++) {

        if (i == 1) 

        {
          /*<img src="../../../img/jane/jane_730_1095_1.jpg">*/
          src = "https://filleafemme.com.mx/img/" + nombre + "/" + nombre + "_730x1095_" + i + ".jpg";

          imagen = imagen + '<div class="carousel-item active">' + 

                     '   <img src="' + src + '" class="d-block " alt="' + nombre + '" style="width: 100%;">' + 

                     ' </div>' ;

        }

        else

        {

          src = "https://filleafemme.com.mx/img/" + nombre + "/" + nombre + "_730x1095_" + i + ".jpg";

          imagen = imagen + '<div class="carousel-item">' + 

                     '   <img src="' + src + '" class="d-block " alt="' + nombre + '" style="width: 100%;">' + 

                     ' </div>' ;

        }

      }

      $("#imagen-carrucel").text("");

      $("#imagen-carrucel").append(imagen);          

      $(".title_modal").text(nombre.toUpperCase());

    });

  });

</script>