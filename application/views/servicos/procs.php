<main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <div class="row">
            <?php foreach($servicos as $servico){?>   
                <div class="col-lg-4 col-md-6 mb-4">  
     
                    <!--Card-->
                        <div class="card card-cascade wider mb-4">

                            <!--Card image-->
                            <div class="view view-cascade">
                                <img src="<?php echo base_url('./assets/img').'/'.$servico['IMAGEM'];?>" class="card-img-top">
                                <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--/Card image-->

                            <!--Card content-->
                            <div class="card-body card-body-cascade text-center">
                                <!--Title-->
                                <h3 class="indigo-text"><strong><?php echo $servico['TITULO']?></strong></h3>

                                <p class="card-text"><?php echo $servico['RESUMO']?>
                                </p>
                            </div>
                            <!--/.Card content-->
                        </div>
                    <!--/.Card-->
            </div>
            <?php } ?>
        </div>
        </section>
            <!--Section: Main info-->
</main
