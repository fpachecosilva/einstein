<?


$compartilhar = "";


if ( $paginaAtual == 'Logotipo' ) {    
    
    $logotipoTitulo_01 = "Versão principal";
    $logotipoLink_01 = $download. "_Versões de Marca\AF_HIAE_VersoesMarca_Principal.zip";
    $logotipoTexto_01 = "AF_HIAE_VersoesMarca_Principal.zip";
    
    $logotipoTitulo_02 = "Símbolo";
    $logotipoLink_02 = $download. "_Símbolo\AF_HIAE_Simbolo.zip";
    $logotipoTexto_02 = "AF_HIAE_Simbolo.zip";
    
    $logotipoTitulo_03 = "Versão secundária";
    $logotipoLink_03 = $download. "_Versões de Marca\AF_HIAE_VersoesMarca_Secundaria.zip";
    $logotipoTexto_03 = "AF_HIAE_VersoesMarca_Secundaria.zip";

    echo'
        <section id="download">
            <article>  
                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_01.'</p>
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_02.'</p>
                            <a href="'.$logotipoLink_02.'">'.$logotipoTexto_02.'</a>
                        </div>
                    </div>
                
                    <div class="dir">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_03.'</p>
                            <a href="'.$logotipoLink_03.'">'.$logotipoTexto_03.'</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}


if ( $paginaAtual == 'Paleta' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "_Cores/AF_HIAE_Cores.zip";
    $logotipoTexto_01 = "AF_HIAE_Cores.zip";

    echo'
        <section id="download">
            <article>
                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_01.'</p>
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}


if ( $paginaAtual == 'Tipografia' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "";
    $logotipoTexto_01 = "";
}


if ( $paginaAtual == 'Iconografia' ) {
    
    $logotipoTitulo_01 = "Em imagem";
    $logotipoLink_01 = $download. "_Iconografia/AF_HIAE_DeckIcones_RGB_PNG.zip";
    $logotipoTexto_01 = "AF_HIAE_DeckIcones_RGB_PNG.zip";
    
    $logotipoTitulo_02 = "Em vetor";
    $logotipoLink_02 = $download. "_Iconografia/AF_HIAE_DeckIcones_RGB_Vetor.zip";
    $logotipoTexto_02 = "AF_HIAE_DeckIcones_RGB_Vetor.zip";   

    echo'
        <section id="download">
            <article>
                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_01.'</p>
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    </div>
                
                    <div class="dir">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_02.'</p>
                            <a href="'.$logotipoLink_02.'">'.$logotipoTexto_02.'</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}


if ( $paginaAtual == 'Grafismos' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "grafismos/AF_Merce_Grafismos.zip";
    $logotipoTexto_01 = "AF_Merce_Grafismos.zip";

    echo'
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>

                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_01.'</p>
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}


if ( $paginaAtual == 'Pictografia' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "pictografia/AF_Merce_Pictos.zip";
    $logotipoTexto_01 = "AF_Merce_Pictos.zip";

    echo'
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>

                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_01.'</p>
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}

if ( $paginaAtual == 'Estilo fotográfico' ) {
    
    $logotipoTitulo_01 = "Clique aqui pra acessar nossas fotos";
    $logotipoLink_01 = "https://drive.google.com/drive/folders/14eQjuEHHPK272gMqY0g7nrQm0HgpFdti";
    $logotipoTexto_01 = "Clique aqui pra acessar nossas fotos";

    echo'
        <section id="download">
            <article> 
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>              

                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}

if ( $paginaAtual == 'Aplicações' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "aplicacoes/AF_Merce_Enxoval.zip";
    $logotipoTexto_01 = "AF_Merce_Enxoval.zip";

    echo'
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>

                <p class="txt--padrao40 txt--bold">Download</p>
                
                <div class="grid--2colunas">
                    <div class="esq">
                        <div>
                            <p class="txt--padrao20">'.$logotipoTitulo_01.'</p>
                            <a href="'.$logotipoLink_01.'">'.$logotipoTexto_01.'</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    ';
}


if ( $paginaAtual == 'Identidade' ) {
    
    $logotipoTitulo_01 = "";
    $logotipoLink_01 = $download. "";
    $logotipoTexto_01 = "";

    echo'
        <section id="download">
            <article>
                <div class="compartilhar desktopitem">
                    <a href=" '.$compartilhar.' " class="share">
                        <p>Compartilhar sessão</p>
                    </a>
                </div>
            </article>
        </section>
    ';
}


?>




