<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Boas práticas';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>    

    <body id="boas-praticas">
        <div class="container">
            <?php include 'assets/menu.php'; ?>

            <main>
                <header class="topobg">
                    <div class="pelicula"></div>
                    <article>
                        <h1>Boas práticas</h1>
                    </article>
                </header>

                <section id="sessao1">
                    <div class="topo">
                        <p class="txt--padrao20 com-bold"><strong>Acessibilidade</strong></p>
                        <p class="txt--padrao12 light">
                            Acessibilidade abrange um amplo escopo de características. Garantir conteúdo acessível
                            vai além de um texto compreensível. É preciso pensar nas capacidades físicas, mentais e
                            intelectuais, sejam elas temporárias ou permanentes. Queremos que toda pessoa que use
                            leitor de tela, navegação por teclado, interface Braille ou que possua qualquer nível de
                            capacidade cognitiva tenha acesso ao nosso conteúdo.
                            <br><br>
                            No Brasil, a legislação determina o nível mínimo de acessibilidade necessário em um site
                            ou plataforma. Por isso, enquanto escrevemos, devemos refletir sobre algumas questões:
                        </p>
                    </div>
                    <article>
                        <div class="box-italic">
                            <ul>
                                <li>A linguagem faria sentido para o seu público?</li>
                                <li>Qualquer potencial leitor conseguiria ler rapidamente e entenderia o texto?</li>
                                <li>Para uma pessoa que não enxerga cores, imagens ou vídeos, a mensagem ainda seria transmitida?</li>
                                <li>A marcação está clara e estruturada?</li>
                                <li>Funciona bem em dispositivos móveis com funcionalidades de acessibilidade ativos?</li>
                            </ul>
                        </div>

                        <div class="txtss se2">
                            <p class="txt--padrao20 com-bold">Use uma linguagem adequada</p>
                            <p class="txt--padrao12 light">
                                Prefira sentenças curtas, na ordem direta e escritas na voz ativa. Use palavras familiares
                                ao seu público. Evite termos técnicos demais se não é do conhecimento do seu leitor.
                                Faça um teste de usabilidade para ter certeza de que seu usuário compreende a
                                mensagem. E evite ao máximo o uso de gírias, jargões e emojis.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Evite linguagem direcional</p>
                            <p class="txt--padrao12 light">
                                Evite instruções que exijam que o leitor visualize todo o layout para navegar pela página
                                de um website ou tela de um aplicativo.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Use headers</p>
                            <p class="txt--padrao12 light">
                                Headers devem sempre ser aninhados e consecutivos. Não pule um nível sem qualquer
                                motivo. Para ajudar no agrupamento de seções, verifique se o título da página é H1, se as
                                seções de nível superior são H2 e assim por diante. Porém, evite excesso de
                                aninhamento.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Use nomes descritivos</p>
                            <p class="txt--padrao12 light">
                                As palavras usadas nos títulos devem conter o que queremos passar. Em um formulário,
                                pense se todos os campos são realmente necessários e quais são obrigatórios. Nomeie
                                cada um deles de forma clara.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Use links descritivos</p>
                            <p class="txt--padrao12 light">
                                Os links devem fornecer informações sobre a ação ou o destino associado a eles. Evite
                                usar “clique aqui” ou “saiba mais” sem contexto.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Evite scrolls gigantes</p>
                            <p class="txt--padrao12 light">
                                Scrolls longos são um problema para usuários com deficiência visual que dependem de
                                leitores de tela e comandos do teclado. Eles têm dificuldade para navegar pela tela e
                                procurar um conteúdo específico.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Verifique se a legenda está disponível</p>
                            <p class="txt--padrao12 light">
                                As legendas ou transcrições são fundamentais para usuários com deficiência auditiva.
                                Assim, garanta que estejam disponíveis em todos os vídeos. Além disso, o conteúdo
                                presente nos vídeos também deve estar disponível em outros formatos.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Esteja atento aos elementos visuais</p>
                            <p class="txt--padrao12 light">
                                Procure colocar alto contraste entre a fonte e a cor de fundo. As imagens não devem ser o
                                único método de comunicação porque às vezes podem não ser carregadas ou vistas.
                                Avalie se é necessário usar imagens quando as mesmas informações puderem ser
                                comunicadas por escrito.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Use equivalentes textuais para imagens</p>
                            <p class="txt--padrao12 light">
                                Texto alternativo e #ParaTodosVerem<br>
                                O texto alternativo (alt text ou tag alt) é o jeito mais básico de descrever uma imagem. Ele
                                deve ser incluído em todas as imagens, exceto naquelas meramente decorativas ou que
                                não ajudam a compor um conteúdo. As pessoas que não enxergam uma imagem devem
                                ter as mesmas informações daquelas que enxergam. Seja foto, ilustração, diagrama,
                                gráfico ou qualquer outro tipo de imagem, descreva com o detalhamento necessário para
                                um bom entendimento. É uma boa prática usar legendas padrão seguido de
                                #ParaTodosVerem.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Tooltip</p>
                            <p class="txt--padrao12 light">
                                Texto que aparece quando você passa o mouse sobre a imagem. Esse tipo de descrição
                                não tem limite de caracteres.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Longdesc</p>
                            <p class="txt--padrao12 light">
                                Quando você tem uma imagem complexa que não pode ser totalmente descrita por meio
                                de título ou texto alternativo, pense em usar o atributo longdesc. Ele relaciona a imagem a
                                uma descrição mais detalhada dentro de outra página HTML.
                            </p>
                        </div>
                    </article>
                </section>

                <section id="sessao2">
                    <div class="header">
                        <p class="txt--padrao40 com-bold">Pessoas</p>
                        <p class="txt--padrao20 light">
                            Toda comunicação envolve pessoas. Por isso, devemos ter cuidado redobrado ao
                            escrever sobre elas, visando sempre uma abordagem inclusiva e respeitosa.
                            Para ajudar você nessa jornada, vamos a algumas dicas:
                        </p>
                    </div>

                    <article>
                        <div class="txtss se2">
                            <p class="txt--padrao20 com-bold">Usuário</p>
                            <p class="txt--padrao12 light">
                                De preferência, trate apenas pelo nome e evite a formalidade da palavra “senhor” ou
                                “senhora” e suas formas abreviadas. Queremos trazer o lado pessoal à interação e nos
                                aproximar do usuário. Mas se atente com quem está falando. Médicos já estão
                                acostumados a serem tratados com “doutor”. Por isso, essa forma de tratamento já é
                                habitual em comunicações dirigidas a esse público.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Evite linguagem direcional</p>
                            <p class="txt--padrao12 light">
                                Evite instruções que exijam que o leitor visualize todo o layout para navegar pela página
                                de um website ou tela de um aplicativo.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Gênero e sexualidade</p>
                            <p class="txt--padrao12 light">
                                Não faça distinção de uma pessoa por gênero ou sexualidade. Logo, evite fazer qualquer
                                referência textual que distinga um ser humano do outro. Use alternativas neutras que
                                incluam os usuários de modo mais amplo e genérico. Dê preferência aos termos comuns
                                de dois gêneros, como “paciente” (um mesmo substantivo serve para o gênero feminino e
                                masculino). Se achar necessário, use a forma plural masculina, que, segundo a norma
                                culta da língua portuguesa, abrange ambos os gêneros.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Deficiências físicas, mentais ou intelectuais</p>
                            <p class="txt--padrao12 light">
                                Em nossa comunicação, o foco é a pessoa, e não suas limitações físicas, mentais ou
                                intelectuais. Não se deve especificar nenhuma dessas condições ao falar com alguém.
                                Assim, palavras como “vítima” e “deficiente” devem ser evitadas. Contudo, em um
                                conteúdo mais técnico e especializado, pode ser necessário o uso de palavras que
                                diferenciem uma patologia de outra. Nesse caso, o foco não é mais a pessoa, e sim o
                                assunto médico.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Idade</p>
                            <p class="txt--padrao12 light">
                                Não faça qualquer referência à idade de ninguém. Se for relevante para a comunicação,
                                essa informação deverá ser escrita entre vírgulas. Também não use palavras como
                                “jovem”, “novo”, “idoso”, “velho”. Cada indivíduo é único e, sempre que possível, devemos
                                nos referir à pessoa pelo nome.
                            </p>                            
                        </div>
                    </article>
                </section>
                
                <section id="sessao3">
                    <div class="header">
                        <p class="txt--padrao40 com-bold">Estilo</p>
                        <p class="txt--padrao20 light">
                            Nossa comunicação pretende aproximar o público da nossa marca, da nossa essência.
                            Palavras compõem uma frase; frases compõem um parágrafo. E tudo isso cria um sentido
                            dentro de um contexto. Assim, um texto bem-escrito, claro, conciso e consistente, é um
                            facilitador para uma boa experiência.
                            <br><br>
                            Apresentamos aqui o nosso estilo gramatical, que se aplica a todo o conteúdo. 
                            Vamos ajudar você a escrever seguindo as normas da língua portuguesa.   
                        </p>
                    </div>
                    <article>
                        <div class="txtss se3">
                            <p class="txt--padrao20 com-bold">Mensagem</p>
                            <p class="txt--padrao12 light">
                                Facilite a vida do seu leitor. Crie uma hierarquia de informações. Organize o conteúdo em
                                sentenças, parágrafos, seções e páginas. Proporcione uma leitura fluida, agrupando
                                ideias relacionadas, evitando longos blocos de texto e usando cabeçalhos e subtítulos
                                descritivos.
                            </p>                            
                            
                            <p class="txt--padrao20 com-bold">Clareza e concisão</p>
                            <p class="txt--padrao12 light">
                                Use o mínimo de palavras possível sem perder o significado e pense nas ações que o
                                usuário deve executar para atingir um objetivo. Prefira frases curtas, objetivas e diretas.
                                Evite linguagem vaga e rebuscada. Sempre releia o que escreveu e veja se está
                                compreensível ao perfil do seu público.
                            </p> 

                            <p class="txt--padrao20 com-bold">Consistência</p>
                            <p class="txt--padrao12 light">
                                Não use termos diferentes para a mesma finalidade. Isso inclui textos de interface do seu
                                produto ou plataforma. Mantenha coerência ao seguir padrões já conhecidos pelo usuário,
                                mas não repita palavras à toa se essa repetição prejudicar a comunicação.
                            </p>                            
                            
                            <p class="txt--padrao20 com-bold">Positividade e simplicidade</p>
                            <p class="txt--padrao12 light">
                                Abreviação é a redução ou omissão fonética de parte da palavra. Tome cuidado ao
                                escrever abreviações, pois pode ser inadequado ao perfil do seu público. Veja algumas de
                                uso comum:
                                <br><br>
                                app – aplicativo
                                fone – telefone
                                foto – fotografia
                                micro – microcomputador
                                quilo – quilograma
                            </p>                            
                            
                            <p class="txt--padrao20 com-bold">Abreviatura</p>
                            <p class="txt--padrao12 light">
                                Abreviatura é a redução de uma palavra a algumas letras ou sílabas, geralmente iniciais.
                                Elas são bem úteis para compor uma escrita breve e para economizar espaço.
                                Listamos aqui algumas mais utilizadas em nosso dia a dia.
                            </p>

                            <div class="box-meses">
                                <div class="box">
                                    <p class="txt--padrao20 com-bold">Meses</p>
                                    <p class="txt--padrao12 light">
                                        <i>
                                        jan – janeiro<br>
                                        fev – fevereiro<br>
                                        mar – março<br>
                                        abr – abril<br>
                                        maio – maio<br>
                                        jun – junho<br>
                                        jul – julho<br>
                                        ago – agosto<br>
                                        set – setembro<br>
                                        out – outubro<br>
                                        nov – novembro<br>
                                        dez – dezembro</i>
                                    </p>
                                </div>
                                <div class="box">
                                    <p class="txt--padrao20 com-bold">Unidades</p>
                                    <p class="txt--padrao12 light">
                                        <i>
                                            cm — centímetro(s)<br>
                                            g — grama(s)<br>
                                            h — hora(s)<br>
                                            kg — quilograma(s)<br>
                                            km — quilômetro(s)<br>
                                            l — litro(s)<br>
                                            m — metro(s)<br>
                                            mg — miligrama(s)<br>
                                            min — minuto(s)<br>
                                            ml — mililitro(s)<br>
                                            mm — milímetro(s)<br>
                                            R$ — Real<br>
                                            s — segundo(s) (de tempo)
                                        </i>
                                    </p>
                                </div>
                                <div class="box">
                                    <p class="txt--padrao20 com-bold">Palavras de tratamento</p>
                                    <p class="txt--padrao12 light">
                                        <i>
                                            dr. — doutor<br>
                                            dra. — doutora<br>
                                            dras. — doutoras<br>
                                            drs. — doutores<br>
                                            sr. — senhor<br>
                                            sra. — senhora<br>
                                            sras. — senhoras<br>
                                            srs. — senhores
                                        </i>
                                    </p>
                                </div>
                                <div class="box">
                                    <p class="txt--padrao20 com-bold">Outros</p>
                                    <p class="txt--padrao12 light">
                                        <i>
                                            ex. — exemplo(s)<br>
                                            fem. — feminino<br>
                                            obs. — observação<br>
                                            pág. — página<br>
                                            págs. — páginas<br>
                                            tel. — telefone
                                        </i>
                                    </p>
                                </div>
                            </div>

                            <p class="txt--padrao20 com-bold">Capitalização</p>
                            <p class="txt--padrao12 light">
                                É o processo de escrita com letra maiúscula. Em tipografia, é conhecido como caixa-alta
                                e segue algumas regras adaptadas ao nosso cenário.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Clareza e concisão</p>
                            <p class="txt--padrao12 light">
                                Use o mínimo de palavras possível sem perder o significado e pense nas ações que o
                                usuário deve executar para atingir um objetivo. Prefira frases curtas, objetivas e diretas.
                                Evite linguagem vaga e rebuscada. Sempre releia o que escreveu e veja se está
                                compreensível ao perfil do seu público.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Cargos e áreas</p>
                            <p class="txt--padrao12 light">
                                Nomes de cargos ou funções são escritos com todas as letras minúsculas, a não ser
                                que seja a primeira palavra da frase, caso em que a letra inicial é maiúscula. Se o
                                nome corresponder a alguma área ou departamento, as letras iniciais de cada
                                palavra são escritas em maiúscula, menos os termos de ligação, como “de”, “da”,
                                “do”, “a”.
                                <br><br><i>
                                Analista de marketing<br>
                                Marketing Digital<br>
                                Analista de sistemas há 10 anos, José foi promovido ontem.</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Cidades, estados, países</p>
                            <p class="txt--padrao12 light">
                                Nomes de cidades, estados e países são escritos com a primeira letra maiúscula.
                                <br><br><i>
                                São Paulo<br>
                                Minas Gerais<br>
                                Brasil</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">E-mail, URL, website</p>
                            <p class="txt--padrao12 light">
                                Endereços de e-mail, URL ou website são sempre escritos com todas as letras
                                minúsculas.
                                <br><br><i>
                                usuario@inovacaoeinstein.com.br<br>
                                www.einstein.br</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Festividades e eventos</p>
                            <p class="txt--padrao12 light">
                                Datas comemorativas, feriados e eventos são escritos com as letras iniciais
                                maiúsculas.
                                <br><br><i>
                                Corpus Christi<br>
                                Dia do Médico<br>
                                Congresso de Neurologia</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Frases</p>
                            <p class="txt--padrao12 light">
                                Todo início de frase é escrito com a primeira letra maiúscula e as demais palavras
                                em minúscula. É um jeito casual e amigável de se comunicar, mais parecido com
                                uma conversa humana. Em um fluxo conversacional, não escreva palavras
                                aleatórias ou frases inteiras em maiúsculo. Dependendo da situação, pode soar
                                agressivo.
                                <br><br>
                                A primeira letra da primeira palavra da frase é em maiúsculo.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Instituições e entidades</p>
                            <p class="txt--padrao12 light">
                                Nomes de instituições, públicas ou privadas, e entidades são escritos com
                                as letras iniciais maiúsculas.
                                <br><br><i>
                                Hospital Israelita Albert Einstein<br>
                                Organização Mundial da Saúde</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Nomes próprios</p>
                            <p class="txt--padrao12 light">
                                Nomes, sobrenomes e apelidos são escritos com as letras iniciais maiúsculas.
                                Mas a palavra que o antecede não, a menos que esteja no início de frase.
                                <br><br><i>
                                Ana Maria<br>
                                João da Silva Santos</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Siglas e símbolos</p>
                            <p class="txt--padrao12 light">
                                Siglas com até 3 letras são escritas totalmente em maiúsculo. Em geral, nas siglas
                                com 4 letras ou mais, somente a primeira é maiúscula e o restante é minúsculo. Use
                                siglas já conhecidas para facilitar o entendimento do texto.
                                <br><br><i>
                                OMS<br>
                                Cremesp</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Einstein</p>
                            <p class="txt--padrao12 light">
                                Antes de sermos uma instituição de saúde, somos uma sociedade beneficente.
                                Dependendo do tipo de comunicação e da abordagem que queira adotar, você pode
                                utilizar diferentes termos para se referir a nós.
                                <br><br><i>
                                Sociedade Beneficente Israelita Brasileira Albert Einstein<br>
                                Hospital Israelita Albert Einstein<br>
                                Einstein</i>
                                <br><br>
                                De qualquer maneira, ao se dirigir ao seu público, escreva as ações na primeira pessoa
                                do plural (nós). É um tratamento mais pessoal e inclusivo, pois mostra que somos uma
                                equipe, um time e não fazemos nada sozinhos. Agregar toque humano à interação faz
                                toda a diferença!
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Contração</p>
                            <p class="txt--padrao12 light">
                                Contração é a união de duas palavras de classes diferentes que formam uma terceira
                                palavra. Usar contrações aproxima o conteúdo escrito da linguagem falada e isso pode
                                engajar o seu usuário. Entretanto, veja se o tipo de comunicação e o perfil de seu público
                                se encaixam nesse modelo de escrita.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Estrangeirismo</p>
                            <p class="txt--padrao12 light">
                                Estrangeirismo é um fenômeno linguístico que introduz palavras originárias de outros
                                idiomas na língua nativa. Em nossas comunicações externas, priorizamos o uso de
                                palavras em português em vez de equivalentes em inglês. Verifique se é possível optar
                                por uma expressão em língua portuguesa e passar a mensagem adequada.
                                <br><br>
                                Às vezes não conseguimos o mesmo resultado com uma palavra nativa, pois o leitor pode
                                estar mais acostumado com a leitura e o significado em inglês. Muitos termos técnicos
                                estão tão incorporados no dia a dia que não precisam de tradução. Traduzi-los, aliás,
                                pode até confundir mais o seu leitor.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Formatação</p>
                            <p class="txt--padrao12 light">
                                Uma formatação adequada ajuda a criar conteúdo escaneável e possibilita uma leitura
                                fluida e dinâmica. Não exagere na dose, pois o excesso de formatação atrapalha a
                                mensagem. Nunca use formatações combinadas de negrito, itálico, sublinhado e letras
                                maiúsculas ao mesmo tempo. E veja se é válido incluir informações em lista para facilitar
                                a leitura.
                            </p>
                            
                            <!-- box negrito italico sublinhado -->
                            <div class="box-formatacao">
                                <div class="cima">
                                    <div class="box">
                                        <p class="txt--padrao20 com-bold">Negrito</p>
                                        <p class="txt--padrao12 light">
                                            <i>
                                                Evite formatar uma frase inteira em negrito. Destaque somente as palavras-chave do texto.
                                            </i>
                                        </p>
                                    </div>
                                    <div class="box">
                                        <p class="txt--padrao20 com-bold">Itálico</p>
                                        <p class="txt--padrao12 light">
                                            <i>
                                                Use itálico para indicar um link quando a expressão tiver no meio de uma frase.
                                            </i>
                                        </p>
                                    </div>
                                    <div class="box">
                                        <p class="txt--padrao20 com-bold">Sublinhado</p>
                                        <p class="txt--padrao12 light">
                                            <i>
                                                Evite sublinhar qualquer trecho de nosso conteúdo.
                                            </i>
                                        </p>
                                    </div>
                                </div>
                                <div class="baixo">
                                    <div class="box">
                                        <p class="txt--padrao20 com-bold">Espaçamento</p>
                                        <p class="txt--padrao12 light">
                                            <i>
                                                Deixe apenas um espaço entre palavras e frases. Formate os parágrafos com espaçamento duplo e sem recuo.
                                            </i>
                                        </p>
                                    </div>
                                    <div class="box">
                                        <p class="txt--padrao20 com-bold">Alinhamento</p>
                                        <p class="txt--padrao12 light">
                                            <i>
                                                Em um texto corrido, alinhe tudo à esquerda. Em componentes, verifique o tipo e alinhe o texto de acordo com o padrão de cada um. Se tiver dúvidas, você pode consultar o guia de componentes do nosso design system.
                                            </i>
                                        </p>
                                    </div>
                                    <div class="box">
                                        <p class="txt--padrao20 com-bold">Lista</p>
                                        <p class="txt--padrao12 light">
                                            <i>
                                                Listas poupam esforço de leitura e facilitam o entendimento por meio de informações objetivas.
                                            </i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="txt--padrao20 com-bold">Gerúndio</p>
                            <p class="txt--padrao12 light">
                                Gerúndio é uma forma verbal que indica continuidade de uma ação, algo que está em
                                andamento e não foi finalizado. É correto empregar gerúndio se quiser dar essa ideia.
                                <br><br>    
                                O gerundismo, por outro lado, é um vício de linguagem e nunca deve ser usado. Além de
                                estar em desacordo com as normas gramaticais, ele atrapalha a compreensão pelo
                                emprego de 3 verbos consecutivos que pretendem dar ideia de continuidade no futuro.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Número</p>

                            <div class="ml50 top30">
                                <p class="txt--padrao20 com-bold">Algarismo</p>
                                <p class="txt--padrao12 light">
                                    Escrevemos os números na forma de algarismos para facilitar a leitura e
                                    economizar caracteres.
                                    <br><br><i>
                                    Passo 3 de 5<br>
                                    4 etapas</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Extenso</p>
                                <p class="txt--padrao12 light">
                                    Escrevemos os números de zero a nove por extenso e, a partir de dez, em
                                    algarismos. Isso vale para textos longos e densos que não são meras instruções.
                                    <br><br><i>
                                    Contratamos nove especialistas em oncologia<br>
                                    Em 15 dias teremos novas previsões</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Milhar</p>
                                <p class="txt--padrao12 light">
                                    Escrevemos os números a partir de mil acompanhados de ponto para separar
                                    cada milhar. Para números muito grandes colocamos algarismos seguidos da
                                    palavra por extenso.
                                    <br><br><i>
                                    100.000 pacientes<br>
                                    123 milhões de contaminados</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Data</p>
                                <p class="txt--padrao12 light">
                                    Quando as datas estão em extenso, os meses são escritos sempre em letras
                                    minúsculas, a não ser que estejam no início da frase.
                                    <br><br>
                                    Abreviamos os dias da semana e os meses se o espaço for reduzido e se isso
                                    facilitar a usabilidade. Ao utilizar algarismos, separamos dia (00), mês (00) e ano
                                    (0000) com barra (/) e colocamos zero antes do dia e do mês. Escrevemos o
                                    primeiro dia do mês em ordinal e os demais em cardinal.
                                    <br><br><i>
                                    25 de janeiro de 2020<br>
                                    1º de abril de 1980<br>
                                    03/08/1985<br>
                                    27/05/1994<br>
                                    Janeiro passado, fiz meu check-up.</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Década</p>
                                <p class="txt--padrao12 light">
                                    Abreviamos décadas quando nos referimos aos últimos 100 anos. Décadas de
                                    mais de 100 anos atrás, somos mais específicos.
                                    <br><br><i>
                                    Anos 70<br>
                                    Os anos 1800</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Decimal e fração</p>
                                <p class="txt--padrao12 light">
                                    Um mesmo número pode ser representado graficamente como decimal ou fração.
                                    Opte por um ou outro conforme a necessidade. Use vírgula para separar a casa
                                    decimal e barra para frações.
                                    <br><br><i>
                                    0,5<br>
                                    1/2</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Dinheiro</p>
                                <p class="txt--padrao12 light">
                                    Valores em dinheiro são escritos em moeda brasileira (R$) com um espaço entre
                                    o símbolo e o numeral. Reais e centavos são separados por vírgulas.
                                    <br><br><i>
                                    R$ 100,50</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Horário</p>
                                <p class="txt--padrao12 light">
                                    Escrevemos horários no formato 24h, com numerais de 0 a 23, acompanhados da
                                    letra “h” minúscula e sem espaço entre o último algarismo e a letra. Esse padrão
                                    facilita a leitura e permite diferenciar os períodos matutino, diurno e noturno sem
                                    confusão. Se precisar inserir minutos, eles vêm depois do “h” sem a abreviatura
                                    “min”. Para indicar um horário ou período de tempo, colocamos “às” 
                                    entre os horários.
                                    <br><br><i>
                                    20h<br>
                                    13h30<br>
                                    8h - 12h</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Intervalo</p>
                                <p class="txt--padrao12 light">
                                    Use hífen ou traço para indicar um período ou intervalo de números.
                                    <br><br><i>
                                    0 - 10</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Porcentagem</p>
                                <p class="txt--padrao12 light">
                                    Sempre usamos o símbolo % em vez de escrever por cento.
                                    <br><br><i>
                                    75%</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Telefone</p>
                                <p class="txt--padrao12 light">
                                    Um contato telefônico é composto pelo código de área entre parênteses, seguido
                                    de espaço, e número do telefone (celular ou fixo) divididos por hífen.
                                    Opcionalmente, pode-se incluir o código do país antecedido pelo símbolo +. 
                                    Nos contatos 0800, use espaço para separar o prefixo dos outros dígitos, sem hífen.
                                    <br><br><i>
                                    (11) 90123-4567<br>
                                    +55 (11) 90123-4567<br>
                                    0800 123 4567</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Temperatura</p>
                                <p class="txt--padrao12 light">
                                    Use o numeral em algarismo, seguido do símbolo de grau e a abreviação
                                    maiúscula de Celsius (ºC), com espaço entre os dígitos e a unidade de
                                    temperatura.
                                    <br><br> <i>
                                    36 ºC</i>
                                </p>
                            </div>

                            <p class="txt--padrao20 com-bold">Aspas ( " ")</p>
                            <p class="txt--padrao12 light">
                                Usamos aspas em palavras que não estão em sentido literal, em títulos, textos
                                completos ou trechos de texto de terceiros e citações diretas.
                                <br><br> <i>
                                "Penso, logo existo", postulou Descartes.</i>
                                <br><br> 
                                Usamos aspas simples somente dentro das aspas duplas. E sempre que as aspas
                                são abertas, elas devem ser fechadas.
                                <br><br> <i>
                                "A patologia denominada 'acantose' é uma caracterizada por manchas escuras."</i>
                                <br><br> 
                                A pontuação segue a seguinte lógica: se fizer parte da citação, devem ficar dentro
                                das aspas. Caso contrário, permanecem fora das aspas.
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Dois-pontos ( : )</p>
                            <p class="txt--padrao12 light">
                                Usamos dois-pontos antes de uma lista com itens, para unir frases relacionadas ou
                                para enfatizar que uma informação muito importante vem a seguir. Se uma frase
                                completa seguir os dois-pontos, coloque a primeira letra em maiúscula.
                                <br><br><i>
                                Especialidades disponíveis: cardiologia, clínica geral, dermatologia, geriatria,
                                hematologia e psiquiatria.</i> 
                            </p>
                            
                            <p class="txt--padrao20 com-bold">“E” comercial ( & )</p>
                            <p class="txt--padrao12 light">
                                Não use & comercial, a menos que faça parte do nome de uma empresa ou marca.
                                <br><br><i>
                                Ben & Jerry's</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Hífen ou traço ( - ou – )</p>
                            <p class="txt--padrao12 light">
                                Use hífen sem espaços em palavras compostas ou expressões que são grafadas
                                dessa maneira.
                                <br><br><i>
                                Bem-estar é cuidar de você.</i>
                                <br><br>
                                Use hífen para juntar verbo e pronome contraído.
                                <br><br><i>
                                Vamos avisá-lo na véspera.</i>
                                <br><br>
                                Use traço para indicar intervalos ou períodos de unidades de medida.
                                <br><br><i>
                                0 - 100 ml </i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Parênteses ( ( ) )</p>
                            <p class="txt--padrao12 light">
                                Para adicionar informações complementares, sempre com espaço entre os
                                parênteses.
                                <br><br><i>
                                Burnout (síndrome do esgotamento profissional)</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Ponto de exclamação ( ! )</p>
                            <p class="txt--padrao12 light">
                                Usamos ponto de exclamação para enfatizar uma ação ou expressar emoção. Mas
                                não exagere na dose. Nunca usamos mais de um ponto. Evitamos o uso em
                                mensagens de falha ou alerta. Em caso de dúvida, não use.
                                <br><br><i>
                                Código enviado!</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Ponto de interrogação ( ? )</p>
                            <p class="txt--padrao12 light">
                                Usamos ponto de interrogação para sinalizar perguntas. Nunca use mais de um. E
                                não use os pontos de interrogação e exclamação juntos.
                                <br><br><i>
                                Qual é o seu nome?</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Ponto-e-vírgula ( ; )</p>
                            <p class="txt--padrao12 light">
                                Ponto-e-vírgula são usados para separar períodos maiores. Se a sentença for longa
                                e complexa, prefira o ponto-final e divida em frases menores. Não use ponto-e-vírgula
                                para separar itens de uma lista.
                                <br><br><i>
                                Participamos do Congresso de Pediatria, Hebiatria e Psicologia durante Isolamento
                                Social; assistimos a todas as palestras sobre comportamento infantil em tempos de
                                pandemia.</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Ponto-final ( . )</p>
                            <p class="txt--padrao12 light">
                                O ponto-final é usado para indicar o término de uma frase. Nunca use ponto final em
                                títulos ou botões.
                                <br><br><i>
                                Uso ponto-final ao final das frases.</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Reticências ( … )</p>
                            <p class="txt--padrao12 light">
                                Costumamos usar reticências para passar sentimento de hesitação ou de frustração.
                                Elas indicam também que a mensagem foi interrompida antes de se chegar ao final
                                do pensamento. As reticências entre parênteses apontam que há omissão de
                                trechos em uma citação. Em nossa comunicação as reticências quase nunca
                                aparecem. Por isso, use com moderação.
                                <br><br><i>
                                Processando informação...
                                Horários alternativos (...) e clínicas fechadas.</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Vírgula ( , )</p>
                            <p class="txt--padrao12 light">
                                Usamos vírgula para enumerar itens dentro de uma frase.
                                <br><br>
                                <i>
                                Tomei vacina de sarampo, poliomielite, tétano, hepatite, meningite e varicela.
                                </i>
                                <br><br>
                                Para separar diferentes frases dentro de uma sentença ou período maior. Isso torna
                                a leitura fluida e natural. Soa como uma pausa ou respiro.
                                <br><br><i>
                                Participamos do Congresso de Imunologia, assistimos a todas as palestras, fizemos
                                um passeio pela cidade e voltamos para casa.</i>
                                <br><br>
                                Para separar o vocativo, termo que chama ou invoca algo ou alguém.
                                <br><br><i>
                                Olá, João
                                Bem-vinda, dra. Ana</i>
                            </p>
                            
                            <p class="txt--padrao20 com-bold">Sigla</p>
                            <p class="txt--padrao12 light">
                                Sigla é um tipo de abreviatura formado pelas letras iniciais de palavras. Representa,
                                sobretudo, nomes de instituições. Faça a referência entre parênteses, logo após a
                                primeira aparição da expressão completa. Se estiver no mesmo contexto, nas demais
                                vezes use somente a sigla.
                            </p>
                            
                            <div class="ml50">
                                <p class="txt--padrao12 light">
                                    <i>
                                    SBIBAE — Sociedade Beneficente Israelita Brasileira Albert Einstein<br>
                                    ONU — Organização das Nações Unidas<br>
                                    OMS — Organização Mundial da Saúde<br>
                                    CFM — Conselho Federal de Medicina<br>
                                    CRM — Conselho Regional de Medicina<br>
                                    Cremesp — Conselho Regional de Medicina do Estado de São Paulo
                                    </i>
                                </p>
                            </div>

                            <!-- box siglas estados -->
                            <div class="siglas">
                                <p class="txt--padrao20 com-bold">Temos também as siglas dos estados brasileiros:</p>
                                <p class="txt--padrao12 light">
                                    <i>
                                        PB — Paraíba<br>
                                        PR — Paraná<br>
                                        PE — Pernambuco<br>
                                        PI — Piauí<br>
                                        RN — Rio Grande do Norte<br>
                                        RS — Rio Grande do Sul<br>
                                        RJ — Rio de Janeiro<br>
                                        RO — Rondônia<br>
                                        RR — Roraima<br>
                                        SC — Santa Catarina<br>
                                        SP — São Paulo<br>
                                        SE — Sergipe<br>
                                        TO — Tocantins
                                    </i>
                                </p>
                            </div>

                            <p class="txt--padrao20 com-bold">Voz ativa e voz passiva</p>
                            <p class="txt--padrao12 light">
                                Na voz ativa, o sujeito da frase pratica a ação. Na voz passiva, ele recebe a ação. Prefira
                                a voz ativa e evite a passiva. Para identificar se está escrevendo na voz passiva, busque
                                palavras como “foi” e “por”. Se não precisar dar a ideia de que recebe a ação, reescreva
                                na voz ativa, em ordem direta, objetiva e clara. Mas se quiser enfatizar a ação, opte pela
                                voz passiva.
                            </p>

                            <div class="ml50">
                                <p class="txt--padrao20 com-bold">Voz ativa</p>
                                <p class="txt--padrao12 light">
                                    O sujeito ativo executa a ação.<br>
                                    <i>O enfermeiro fez o curativo.</i>
                                </p>
                                
                                <p class="txt--padrao20 com-bold">Voz passiva</p>
                                <p class="txt--padrao12 light">
                                    O sujeito paciente recebe a ação.<br>
                                    <i>O curativo foi feito pelo enfermeiro.</i>
                                </p>
                            </div>                            
                        </div>
                    </article>
                </section>

                <section id="sessao4">
                    <div class="header">
                        <p class="txt--padrao40 com-bold">Ortografia</p>
                        <p class="txt--padrao20 light">
                            Aqui você encontra uma lista de palavras que podem causar dúvida em relação à grafia e
                            ao uso correto. Outra lista com termos a serem evitados por fugirem ao nosso estilo de
                            linguagem e distorcerem a nossa personalidade. E, por fim, uma terceira lista com
                            expressões que são incentivadas e muito bem-vindas por trazerem a ideia de quem nós
                            realmente somos. Na hora de escrever, tenha certeza de que está utilizando essas
                            palavras de acordo com as regras gramaticais e normas da língua portuguesa.
                        </p>
                    </div>
                    <article>
                        <p class="txt--padrao20 com-bold">A partir: nunca com crase</p>
                        <p class="txt--padrao12 light">
                            <i>
                            Lançamento a partir de 2020<br>
                            Mensalidade a partir de R$ 100,00
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">À vista: sempre com crase</p>
                        <p class="txt--padrao12 light">
                            <i>
                            Valor à vista ou parcelado<br>
                            Pagamento à vista
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Aonde: apenas para indicar lugar com ideia de algo em movimento</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Aonde você foi?<br>
                                Não sei aonde íamos.
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Aplicativo: primeira letra maiúscula somente quando estiver no início de frase</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Atualize o seu aplicativo<br>
                                Aplicativo desatualizado<br>
                                Baixe o nosso app<br>
                                App com nova versão
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Através: apenas para dar ideia de algo que atravessa</p>
                        <p class="txt--padrao12 light">
                            <i>
                                A luz entra através do vidro<br>
                                A paisagem é vista através da janela
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Bluetooth: sempre com a primeira letra maiúscula, pois é o nome de uma tecnologia</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Tecnologia Bluetooth<br>
                                Suporte a Bluetooth
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Bem-estar: sempre com hífen e letras minúsculas, a não ser que esteja no início de frase</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Cuidamos do seu bem-estar<br>
                                Bem-estar é cuidar de você
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Bem-vindo(a): sempre com hífen e letras minúsculas, a não ser que esteja no início de frase</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Você é bem-vindo aqui<br>
                                Bem-vinda, dra. Ana Maria<br>
                                Boas-vindas, dr. Carlos<br>
                                Desejamos boas-vindas a você
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Check-in: sempre com hífen e letras minúsculas, a não ser que esteja no início de frase ou seja nome de uma funcionalidade</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Faça check-in pelo aplicativo<br>
                                Check-in disponível
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Check-up: sempre com hífen e letras Maiúsculas, com Einstein precedendo a palavra Check-Up</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Faça seu Check-Up Einstein anual<br>
                                Check-Up Einstein
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">CNPJ: sempre com todas as letras maiúsculas, pois é uma sigla</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Digite o CNPJ<br>
                                CNPJ da empresa
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">CPF: sempre com todas as letras maiúsculas, pois é uma sigla</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Digite seu CPF<br>
                                CPF do usuário
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">CRM: sempre com todas as letras maiúsculas, pois é uma sigla</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Digite seu CRM<br>
                                CRM inválido
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Dia a dia: sempre sem hífen e letras minúsculas, a não ser que esteja no início de frase</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Exercícios do dia a dia<br>
                                Dia a dia no hospital
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">E-mail: sempre com hífen e letras minúsculas, a não ser que esteja no início de frase</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Cadastre seu e-mail<br>
                                E-mail do usuário
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Facebook: sempre com a primeira letra maiúscula, pois é o nome de uma mídia social</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Entre com Facebook<br>
                                Faça login com Facebook
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Hashtag (#): todas as primeiras letras das palavras maiúsculas, para facilitar a leitura e entendimento do texto</p>
                        <p class="txt--padrao12 light">
                            <i>
                                #ParaTodosVerem<br>
                                #CooperarParaControlar
                            </i>
                        </p>
                        
                        <p class="txt--padrao20 com-bold">Homepage: primeira letra maiúscula somente quando estiver no início de frase</p>
                        <p class="txt--padrao12 light">
                            <i>
                                Acesse nossa homepage<br>
                                Homepage do hospital
                            </i>
                        </p>
                    </article>
                </section>

                <section id="sessao5">
                    <div class="header">
                        <p class="txt--padrao40 com-bold">Resumo</p>
                        <p class="txt--padrao20 light">
                            Por fim, reveja a peça pensando se:
                        </p>
                        <div class="resumo">
                            <div class="box">
                                <img class="redux" src="http://localhost/einstein/assets/img/identidade/10-Identidade Verbal/positivo.png" alt="" width="22">
                                <p class="txt--padrao12 light"><i>Quem está lendo vai conseguir entender/se identificar com o que estou falando?</i></p>
                            </div>
                            <div class="box">
                                <img class="redux" src="http://localhost/einstein/assets/img/identidade/10-Identidade Verbal/positivo.png" alt="" width="22">
                                <p class="txt--padrao12 light"><i>Trouxe informação relevante e verdadeira?</i></p>
                            </div>
                            <div class="box">
                                <img class="redux" src="http://localhost/einstein/assets/img/identidade/10-Identidade Verbal/positivo.png" alt="" width="22">
                                <p class="txt--padrao12 light"><i>Escrevi da forma mais clara e útil possível?</i></p>
                            </div>
                            <div class="box">
                                <img class="redux" src="http://localhost/einstein/assets/img/identidade/10-Identidade Verbal/positivo.png" alt="" width="22">
                                <p class="txt--padrao12 light"><i>Pensei na hierarquia de informação, sem dar preguiça de ler?</i></p>
                            </div>
                            <div class="box">
                                <img class="redux" src="http://localhost/einstein/assets/img/identidade/10-Identidade Verbal/positivo.png" alt="" width="22">
                                <p class="txt--padrao12 light"><i>Mostrei empatia e tratei quem está do outro lado de forma humana e respeitosa?</i></p>
                            </div>
                            <div class="box">
                                <img class="redux" src="http://localhost/einstein/assets/img/identidade/10-Identidade Verbal/positivo.png" alt="" width="22">
                                <p class="txt--padrao12 light"><i>Mostrei nossa amplitude, nossa vontade de fazer mais pela sociedade, construindo a medicina do futuro?</i></p>
                            </div>
                        </div>
                    </div>
                </section>



                <? include ('assets/footer.php') ?>
            </main>
        </div>    
        <script type="text/javascript">
            $('.link-abre').removeClass('active')
            $('.menu li').hide();
			$('.link-abre:eq(10)').addClass('active');
		</script>
    </body>
</html>