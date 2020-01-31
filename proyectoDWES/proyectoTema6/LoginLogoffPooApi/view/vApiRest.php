<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="volver" class="btn-menu btn btn-secondary" value="Volver"> 
    <div class="contenedor"><br><br>
        <h1>Api-Rest Aemet</h1>
        <div class="clima">
            <?php if(isset( $fechaDatosGenerados)){?>
            <div class="fechaDatos">Datos generados: <?php echo $fechaDatosGenerados ?></div>
            <div class="localidad">Localidad: <?php echo $localidad ?></div>
            <div class="periodo">Periodo de prevision: <?php echo $aDatosActuales["periodo"] ?>:00 hs</div>
            <div class="cielo">Cielo: <?php echo $aDatosActuales["descripcion"] ?></div>
            <div class="cielo">Temperatura: <?php echo $temperaturaActual ?>   ºC</div>
            <div class="cielo">Sensación termica: <?php echo $sensacionTermicaActual ?>   ºC</div>

            <div class="dibujo">
                <?php
                switch ($aDatosActuales["descripcion"]) {
                    case "Cubierto":
                        echo '<div class="icon cloudy">';
                        echo '<div class="cloud"></div>';
                        echo '<div class="cloud"></div>';
                        echo '</div>';
                        break;
                    case "Bruma":
                        echo '<div class="icon cloudy">';
                        echo '<div class="cloud"></div>';
                        echo '<div class="cloud"></div>';
                        echo '</div>';
                        break;
                    case "Cubierto con lluvia escasa":
                        echo '<div class="icon rainy">';
                        echo '<div class="cloud"></div>';
                        echo '<div class="rain"></div>';
                        echo '</div>';
                        break;
                    case "Nubes altas":
                        echo '<div class="icon sun-shower">';
                        echo '<div class="cloud"></div>';
                        echo '<div class="sun">';
                        echo '<div class="rays"></div>';
                        echo '</div>';
                        echo '</div>';
                        break;
                    case "Poco nuboso":
                        echo '<div class="icon sun-shower">';
                        echo '<div class="cloud"></div>';
                        echo '<div class="sun">';
                        echo '<div class="rays"></div>';
                        echo '</div>';
                        echo '</div>';
                        break;
                    case "Despejado":
                        echo '<div class="icon sunny">';
                        echo '<div class="sun">';
                        echo '<div class="rays"></div>';
                        echo '</div>';
                        echo '</div>';
                        break;
                }
                ?>
                <select class="selectpicker" id="predes22" name="predes22" data-live-search="true" tabindex="-98">
                    <option value="">Seleccione un municipio</option>
                    <option value="id49002">Abezames</option>
                    <option value="id49003">Alcañices</option>
                    <option value="id49004">Alcubilla de Nogales</option>
                    <option value="id49005">Alfaraz de Sayago</option>
                    <option value="id49006">Algodre</option>
                    <option value="id49007">Almaraz de Duero</option>
                    <option value="id49008">Almeida de Sayago</option>
                    <option value="id49009">Andavías</option>
                    <option value="id49010">Arcenillas</option>
                    <option value="id49011">Arcos de la Polvorosa</option>
                    <option value="id49012">Argañín</option>
                    <option value="id49013">Argujillo</option>
                    <option value="id49014">Arquillinos</option>
                    <option value="id49015">Arrabalde</option>
                    <option value="id49016">Aspariegos</option>
                    <option value="id49017">Asturianos</option>
                    <option value="id49018">Ayoó de Vidriales</option>
                    <option value="id49019">Barcial del Barco</option>
                    <option value="id49020">Belver de los Montes</option>
                    <option value="id49021">Benavente</option>
                    <option value="id49022">Benegiles</option>
                    <option value="id49023">Bermillo de Sayago</option>
                    <option value="id49024">Bóveda de Toro, La</option>
                    <option value="id49025">Bretó</option>
                    <option value="id49026">Bretocino</option>
                    <option value="id49027">Brime de Sog</option>
                    <option value="id49028">Brime de Urz</option>
                    <option value="id49029">Burganes de Valverde</option>
                    <option value="id49030">Bustillo del Oro</option>
                    <option value="id49031">Cabañas de Sayago</option>
                    <option value="id49032">Calzadilla de Tera</option>
                    <option value="id49033">Camarzana de Tera</option>
                    <option value="id49034">Cañizal</option>
                    <option value="id49035">Cañizo</option>
                    <option value="id49036">Carbajales de Alba</option>
                    <option value="id49037">Carbellino</option>
                    <option value="id49038">Casaseca de Campeán</option>
                    <option value="id49039">Casaseca de las Chanas</option>
                    <option value="id49040">Castrillo de la Guareña</option>
                    <option value="id49041">Castrogonzalo</option>
                    <option value="id49042">Castronuevo</option>
                    <option value="id49043">Castroverde de Campos</option>
                    <option value="id49044">Cazurra</option>
                    <option value="id49046">Cerecinos de Campos</option>
                    <option value="id49047">Cerecinos del Carrizal</option>
                    <option value="id49048">Cernadilla</option>
                    <option value="id49050">Cobreros</option>
                    <option value="id49052">Coomonte</option>
                    <option value="id49053">Coreses</option>
                    <option value="id49054">Corrales del Vino</option>
                    <option value="id49055">Cotanes del Monte</option>
                    <option value="id49056">Cubillos</option>
                    <option value="id49057">Cubo de Benavente</option>
                    <option value="id49058">Cubo de Tierra del Vino, El</option>
                    <option value="id49059">Cuelgamures</option>
                    <option value="id49061">Entrala</option>
                    <option value="id49062">Espadañedo</option>
                    <option value="id49063">Faramontanos de Tábara</option>
                    <option value="id49064">Fariza</option>
                    <option value="id49065">Fermoselle</option>
                    <option value="id49066">Ferreras de Abajo</option>
                    <option value="id49067">Ferreras de Arriba</option>
                    <option value="id49068">Ferreruela</option>
                    <option value="id49069">Figueruela de Arriba</option>
                    <option value="id49071">Fonfría</option>
                    <option value="id49075">Fresno de la Polvorosa</option>
                    <option value="id49076">Fresno de la Ribera</option>
                    <option value="id49077">Fresno de Sayago</option>
                    <option value="id49078">Friera de Valverde</option>
                    <option value="id49079">Fuente Encalada</option>
                    <option value="id49080">Fuentelapeña</option>
                    <option value="id49082">Fuentes de Ropel</option>
                    <option value="id49081">Fuentesaúco</option>
                    <option value="id49083">Fuentesecas</option>
                    <option value="id49084">Fuentespreadas</option>
                    <option value="id49085">Galende</option>
                    <option value="id49086">Gallegos del Pan</option>
                    <option value="id49087">Gallegos del Río</option>
                    <option value="id49088">Gamones</option>
                    <option value="id49090">Gema</option>
                    <option value="id49091">Granja de Moreruela</option>
                    <option value="id49092">Granucillo</option>
                    <option value="id49093">Guarrate</option>
                    <option value="id49094">Hermisende</option>
                    <option value="id49095">Hiniesta, La</option>
                    <option value="id49096">Jambrina</option>
                    <option value="id49097">Justel</option>
                    <option value="id49098">Losacino</option>
                    <option value="id49099">Losacio</option>
                    <option value="id49100">Lubián</option>
                    <option value="id49101">Luelmo</option>
                    <option value="id49102">Maderal, El</option>
                    <option value="id49103">Madridanos</option>
                    <option value="id49104">Mahide</option>
                    <option value="id49105">Maire de Castroponce</option>
                    <option value="id49107">Malva</option>
                    <option value="id49108">Manganeses de la Lampreana</option>
                    <option value="id49109">Manganeses de la Polvorosa</option>
                    <option value="id49110">Manzanal de Arriba</option>
                    <option value="id49112">Manzanal de los Infantes</option>
                    <option value="id49111">Manzanal del Barco</option>
                    <option value="id49113">Matilla de Arzón</option>
                    <option value="id49114">Matilla la Seca</option>
                    <option value="id49115">Mayalde</option>
                    <option value="id49116">Melgar de Tera</option>
                    <option value="id49117">Micereces de Tera</option>
                    <option value="id49118">Milles de la Polvorosa</option>
                    <option value="id49119">Molacillos</option>
                    <option value="id49120">Molezuelas de la Carballeda</option>
                    <option value="id49121">Mombuey</option>
                    <option value="id49122">Monfarracinos</option>
                    <option value="id49123">Montamarta</option>
                    <option value="id49124">Moral de Sayago</option>
                    <option value="id49126">Moraleja de Sayago</option>
                    <option value="id49125">Moraleja del Vino</option>
                    <option value="id49128">Morales de Rey</option>
                    <option value="id49129">Morales de Toro</option>
                    <option value="id49130">Morales de Valverde</option>
                    <option value="id49127">Morales del Vino</option>
                    <option value="id49131">Moralina</option>
                    <option value="id49132">Moreruela de los Infanzones</option>
                    <option value="id49133">Moreruela de Tábara</option>
                    <option value="id49134">Muelas de los Caballeros</option>
                    <option value="id49135">Muelas del Pan</option>
                    <option value="id49136">Muga de Sayago</option>
                    <option value="id49137">Navianos de Valverde</option>
                    <option value="id49138">Olmillos de Castro</option>
                    <option value="id49139">Otero de Bodas</option>
                    <option value="id49141">Pajares de la Lampreana</option>
                    <option value="id49143">Palacios de Sanabria</option>
                    <option value="id49142">Palacios del Pan</option>
                    <option value="id49145">Pedralba de la Pradería</option>
                    <option value="id49146">Pego, El</option>
                    <option value="id49147">Peleagonzalo</option>
                    <option value="id49148">Peleas de Abajo</option>
                    <option value="id49149">Peñausende</option>
                    <option value="id49150">Peque</option>
                    <option value="id49151">Perdigón, El</option>
                    <option value="id49152">Pereruela</option>
                    <option value="id49153">Perilla de Castro</option>
                    <option value="id49154">Pías</option>
                    <option value="id49155">Piedrahita de Castro</option>
                    <option value="id49156">Pinilla de Toro</option>
                    <option value="id49157">Pino del Oro</option>
                    <option value="id49158">Piñero, El</option>
                    <option value="id49160">Pobladura de Valderaduey</option>
                    <option value="id49159">Pobladura del Valle</option>
                    <option value="id49162">Porto</option>
                    <option value="id49163">Pozoantiguo</option>
                    <option value="id49164">Pozuelo de Tábara</option>
                    <option value="id49165">Prado</option>
                    <option value="id49166">Puebla de Sanabria</option>
                    <option value="id49167">Pueblica de Valverde</option>
                    <option value="id49170">Quintanilla de Urz</option>
                    <option value="id49168">Quintanilla del Monte</option>
                    <option value="id49169">Quintanilla del Olmo</option>
                    <option value="id49171">Quiruelas de Vidriales</option>
                    <option value="id49172">Rabanales</option>
                    <option value="id49173">Rábano de Aliste</option>
                    <option value="id49174">Requejo</option>
                    <option value="id49175">Revellinos</option>
                    <option value="id49176">Riofrío de Aliste</option>
                    <option value="id49177">Rionegro del Puente</option>
                    <option value="id49178">Roales</option>
                    <option value="id49179">Robleda-Cervantes</option>
                    <option value="id49180">Roelos de Sayago</option>
                    <option value="id49181">Rosinos de la Requejada</option>
                    <option value="id49183">Salce</option>
                    <option value="id49184">Samir de los Caños</option>
                    <option value="id49185">San Agustín del Pozo</option>
                    <option value="id49186">San Cebrián de Castro</option>
                    <option value="id49187">San Cristóbal de Entreviñas</option>
                    <option value="id49188">San Esteban del Molar</option>
                    <option value="id49189">San Justo</option>
                    <option value="id49190">San Martín de Valderaduey</option>
                    <option value="id49191">San Miguel de la Ribera</option>
                    <option value="id49192">San Miguel del Valle</option>
                    <option value="id49193">San Pedro de Ceque</option>
                    <option value="id49194">San Pedro de la Nave-Almendra</option>
                    <option value="id49208">San Vicente de la Cabeza</option>
                    <option value="id49209">San Vitero</option>
                    <option value="id49197">Santa Clara de Avedillo</option>
                    <option value="id49199">Santa Colomba de las Monjas</option>
                    <option value="id49200">Santa Cristina de la Polvorosa</option>
                    <option value="id49201">Santa Croya de Tera</option>
                    <option value="id49202">Santa Eufemia del Barco</option>
                    <option value="id49203">Santa María de la Vega</option>
                    <option value="id49204">Santa María de Valverde</option>
                    <option value="id49205">Santibáñez de Tera</option>
                    <option value="id49206">Santibáñez de Vidriales</option>
                    <option value="id49207">Santovenia</option>
                    <option value="id49210">Sanzoles</option>
                    <option value="id49214">Tábara</option>
                    <option value="id49216">Tapioles</option>
                    <option value="id49219">Toro</option>
                    <option value="id49220">Torre del Valle, La</option>
                    <option value="id49221">Torregamones</option>
                    <option value="id49222">Torres del Carrizal</option>
                    <option value="id49223">Trabazos</option>
                    <option value="id49224">Trefacio</option>
                    <option value="id49225">Uña de Quintana</option>
                    <option value="id49226">Vadillo de la Guareña</option>
                    <option value="id49227">Valcabado</option>
                    <option value="id49228">Valdefinjas</option>
                    <option value="id49229">Valdescorriel</option>
                    <option value="id49230">Vallesa de la Guareña</option>
                    <option value="id49231">Vega de Tera</option>
                    <option value="id49232">Vega de Villalobos</option>
                    <option value="id49233">Vegalatrave</option>
                    <option value="id49234">Venialbo</option>
                    <option value="id49235">Vezdemarbán</option>
                    <option value="id49236">Vidayanes</option>
                    <option value="id49237">Videmala</option>
                    <option value="id49238">Villabrázaro</option>
                    <option value="id49239">Villabuena del Puente</option>
                    <option value="id49240">Villadepera</option>
                    <option value="id49241">Villaescusa</option>
                    <option value="id49242">Villafáfila</option>
                    <option value="id49243">Villaferrueña</option>
                    <option value="id49244">Villageriz</option>
                    <option value="id49245">Villalazán</option>
                    <option value="id49246">Villalba de la Lampreana</option>
                    <option value="id49247">Villalcampo</option>
                    <option value="id49248">Villalobos</option>
                    <option value="id49249">Villalonso</option>
                    <option value="id49250">Villalpando</option>
                    <option value="id49251">Villalube</option>
                    <option value="id49252">Villamayor de Campos</option>
                    <option value="id49255">Villamor de los Escuderos</option>
                    <option value="id49256">Villanázar</option>
                    <option value="id49257">Villanueva de Azoague</option>
                    <option value="id49258">Villanueva de Campeán</option>
                    <option value="id49259">Villanueva de las Peras</option>
                    <option value="id49260">Villanueva del Campo</option>
                    <option value="id49263">Villar de Fallaves</option>
                    <option value="id49264">Villar del Buey</option>
                    <option value="id49261">Villaralbo</option>
                    <option value="id49262">Villardeciervos</option>
                    <option value="id49265">Villardiegua de la Ribera</option>
                    <option value="id49266">Villárdiga</option>
                    <option value="id49267">Villardondiego</option>
                    <option value="id49268">Villarrín de Campos</option>
                    <option value="id49269">Villaseco del Pan</option>
                    <option value="id49270">Villavendimio</option>
                    <option value="id49272">Villaveza de Valverde</option>
                    <option value="id49271">Villaveza del Agua</option>
                    <option value="id49273">Viñas</option>
                    <option value="id49275">Zamora</option>
                </select>
            </div>
        </div>
            <?php }?>

    </div>

</form>