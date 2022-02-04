<main>

    <section>
        <div class="container bg-light text-center">
            <div class="row">
                
                <?php    
                    if(count($pokemons->pokemon) > 0){                        
                        foreach($pokemons->pokemon as $Pokemon){ ?>

                            <div class="col-md-3 text-dark m-3">                                
                                <div class="">
                                    <div class="card-image pt-3">
                                        <figure>
                                            <img src="<?=$Pokemon->img?>" alt="<?=$Pokemon->name?>">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <h4><?=$Pokemon->name?></h4>
                                            <p>
                                                <?php 
                                                    if(isset($Pokemon->next_evolution)){
                                                        echo "Proximas Evoluções: ";
                                                        foreach($Pokemon->next_evolution as $evolutions){
                                                            echo $evolutions->name."; ";
                                                        }
                                                    }else if(isset($Pokemon->prev_evolution)){
                                                        echo "Formas Anteriores: ";
                                                        foreach($Pokemon->prev_evolution as $preEvolutions){
                                                            echo $preEvolutions->name."; ";
                                                        }
                                                    }else{
                                                        echo "Não possui evoluções";
                                                    }
                                                ?>
                                            </p>
                                            <p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Mais informações
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><?=$Pokemon->name?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php ;}
                    } else{ ?>
                        <div class="col-3 bg-danger">
                                <p>Nenhum Pokemon retornado pela API</p>
                        </div>
                <?php } ?>                     
                
            </div>
        </div>
    </section>

</main>