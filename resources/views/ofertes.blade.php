<x-appcand title="Oferta trabajo">
    {{-- <div class="flex flex-col bg-quasinegre h-screen"> --}}

  <br><br><br>


  <div class="flex flex-col bg-rosaclar">


  <form class = "m-20">
    <div class="mb-6">
      <label for="email" class="block mb-2 text-sm font-medium text-gris">Your email</label>
      <input type="email" id="email" class="bg-white border border-grismig text-quasinegre text-sm rounded-lg focus:rosa focus:border-rosa block w-full p-2.5" placeholder="name@flowbite.com" required>
    </div>
    <div class="mb-6">
      <label for="password" class="block mb-2 text-sm font-medium text-gris">Your password</label>
      <input type="password" id="password" class="bg-white border border-grismig text-gris text-sm rounded-lg focus:ring-rosa focus:border-rosa block w-full p-2.5" placeholder="password" required>
    </div>

    <div class="flex items-start mb-6">
      <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-grismig rounded bg-grisclar focus:ring-3 focus:rosaclar" required>
      </div>
      <label for="remember" class="ml-2 text-sm font-medium text-gris dark:text-grismig">Remember me</label>
    </div>

    <button type="submit" class="text-white bg-roigclar hover:bg-roig focus:ring-4 focus:outline-none focus:ring-rosaclar font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>

        <fieldset>

        <!-- Form Name -->
        <legend class ="text-xl font-medium text-gris">Form Name</legend>

        <!-- Text input-->
        <div>
            <label for="ID">ID</label>
            <div>
            <input id="ID" name="ID" type="text" placeholder="Id oferta Trabajo">

            </div>
            </div>

        <!-- Text input-->
        <div>
            <label for="publicada">Fecha</label>
            <div>
            <input id="publicada" name="publicada" type="text" placeholder="Fecha de publicación">

            </div>
          </div>


        <!-- Text input-->
        <div>
          <label for="nompuesto">Puesto</label>
          <div>
          <input id="nompuesto" name="nompuesto" type="text" placeholder="Puesto de trabajo">

          </div>
        </div>

        <!-- Text input-->
        <div>
            <label for="empresa">Empresa</label>
            <div>
            <input id="empresa" name="empresa" type="text" placeholder="empresa">

            </div>
          </div>

        <!-- Text input-->
        <div>
            <label for="residencia">Localidad</label>
            <div>
            <input id="residencia" name="residencia" type="text" placeholder="Localidad">

            </div>
          </div>

        <!-- Textarea -->
        <div>
            <label for="funciones">Funciones</label>
            <div>
                <textarea id="funciones" name="funciones">Funciones</textarea>
            </div>
            </div>

        <!-- Textarea -->
        <div>
          <label for="requisitos">Requisitos</label>
          <div>
            <textarea id="requisitos" name="requisitos">Requisitos</textarea>
          </div>
        </div>

        <!-- Textarea -->
        <div>
          <label for="conocimientos">Conocimientos</label>
          <div>
            <textarea id="conocimientos" name="conocimientos">Conocimientos</textarea>
          </div>
        </div>

        <!-- Textarea -->
        <div>
          <label for="experiencia">Experiencia</label>
          <div>
            <textarea class="form-control" id="experiencia" name="experiencia">Experiencia</textarea>
          </div>
        </div>



        <!-- Multiple Checkboxes (inline) -->
        <div>
          <label for="paxcargo">personas a cargo</label>
          <div>
            <labelfor="paxcargo-0">
              <input type="checkbox" name="paxcargo" id="paxcargo-0" value="1">
              0
            </label>
            <label class="checkbox-inline" for="paxcargo-1">
              <input type="checkbox" name="paxcargo" id="paxcargo-1" value="2">
              &lt;5
            </label>
            <label class="checkbox-inline" for="paxcargo-2">
              <input type="checkbox" name="paxcargo" id="paxcargo-2" value="3">
              &lt;20
            </label>
            <label class="checkbox-inline" for="paxcargo-3">
              <input type="checkbox" name="paxcargo" id="paxcargo-3" value="4">
              +20
            </label>
          </div>
        </div>

        <!-- Text input-->
        <div>
          <label for="nvacantes">nº de vacantes</label>
          <div>
          <input id="nvacantes" name="nvacantes" type="text" placeholder="num">

          </div>
        </div>

        <!-- Select Basic -->
        <div>
          <label for="sector">Sector</label>
          <div>
            <select id="sector" name="sector">
              <option value="A(" 1.agraria"),"="">A("1.Agraria"),</option>
              <option value="B(" 2.marítimo-pesquera"),"="">B("2.Marítimo-Pesquera"),</option>
              <option value="C(" 3.industrias="" alimentarias"),"="">C("3.Industrias Alimentarias"),</option>
              <option value="D(" 4.química"),"="">D("4.Química"),</option>
              <option value="E(" 5.="" imagen="" personal"),"="">E("5. Imagen Personal"),</option>
              <option value="F(" 6.="" sanidad"),"="">F("6. Sanidad"),</option>
              <option value="G(" 7.="" seguridad="" y="" medio="" ambiente"),"="">G("7. Seguridad y Medio Ambiente"),</option>
              <option value="H(" 8.="" fabricación="" mecánica"),"="">H("8. Fabricación Mecánica"),</option>
              <option value="I(" 9.="" instalación="" y="" mantenimiento"),"="">I("9. Instalación y Mantenimiento"),</option>
              <option value="J(" 10.="" electricidad="" y="" electrónica"),"="">J("10. Electricidad y Electrónica"),</option>
              <option value="K(" 11.="" energía="" y="" agua"),"="">K("11. Energía y Agua"),</option>
              <option value="L(" 12.="" transporte="" y="" mantenimiento="" de="" vehículos"),"="">L("12. Transporte y Mantenimiento de Vehículos"),</option>
              <option value="M(" 13.="" industrias="" extractivas"),"="">M("13. Industrias Extractivas"),</option>
              <option value="N(" 14.="" edificación="" y="" obra="" civil"),"="">N("14. Edificación y Obra Civil"),</option>
              <option value="O(" 15.="" vidrio="" y="" cerámica"),"="">O("15. Vidrio y Cerámica"),</option>
              <option value="P(" 16.="" madera,="" mueble="" y="" corcho"),"="">P("16. Madera, Mueble y Corcho"),</option>
              <option value="Q(" 17.="" textil,="" confección="" y="" piel"),"="">Q("17. Textil, Confección y Piel"),</option>
              <option value="R(" 18.="" artes="" gráficas"),"="">R("18. Artes Gráficas"),</option>
              <option value="S(" 19.="" imagen="" y="" sonido"),"="">S("19. Imagen y Sonido"),</option>
              <option value="T(" 20.="" informática="" y="" comunicaciones"),"="">T("20. Informática y Comunicaciones"),</option>
              <option value="U(" 21.="" administración="" y="" gestión"),"="">U("21. Administración y Gestión"),</option>
              <option value="V(" 22.="" comercio="" y="" marketing"),"="">V("22. Comercio y Marketing"),</option>
              <option value="W(" 23.="" servicios="" socioculturales="" y="" a="" la="" comunidad"),"="">W("23. Servicios Socioculturales y a la Comunidad"),</option>
              <option value="X(" 24.="" hostelería="" y="" turismo"),"="">X("24. Hostelería y Turismo"),</option>
              <option value="Y(" 25.="" actividades="" físicas="" y="" deportivas"),"="">Y("25. Actividades Físicas y Deportivas"),</option>
              <option value="Z(" 26.="" artes="" y="" artesanías");"="">Z("26. Artes y Artesanías");</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div>
          <label for="categoria">Categoría</label>
          <div>
            <select id="categoria" name="categoria">
              <option value="A(" administrativo"),"="">A("Administrativo"),</option>
              <option value="B(" administrativo="" de="" empresa"),"="">B("Administrativo de empresa"),</option>
              <option value="C(" atención="" al="" cliente"),"="">C("Atención al cliente"),</option>
              <option value="D(" calidad,="" producción="" e="" i+d"),"="">D("Calidad, producción e I+D"),</option>
              <option value="E(" comercial="" y="" ventas"),"="">E("Comercial y ventas"),</option>
              <option value="F(" compras,="" logística="" y="" almacén"),"="">F("Compras, logística y almacén"),</option>
              <option value="G(" diseño="" y="" artes="" gráficas"),"="">G("Diseño y artes gráficas"),</option>
              <option value="H(" educación="" y="" formación"),"="">H("Educación y formación"),</option>
              <option value="I(" finanzas="" y="" bancos"),"="">I("Finanzas y bancos"),</option>
              <option value="J(" informática="" y="" telecomunicaciones"),"="">J("Informática y telecomunicaciones"),</option>
              <option value="K(" ingenieros="" y="" técnicos"),"="">K("Ingenieros y técnicos"),</option>
              <option value="L(" mantenimiento="" electromecánico="" y="" general"),"="">L("mantenimiento electromecánico y general"),</option>
              <option value="M(" legal"),"="">M("Legal"),</option>
              <option value="N(" marketing="" y="" comunicación"),"="">N("Marketing y Comunicación"),</option>
              <option value="O(" profesiones,="" artes="" y="" oficios"),"="">O("Profesiones, artes y oficios"),</option>
              <option value="P(" recursos="" humanos"),"="">P("Recursos Humanos"),</option>
              <option value="Q(" prl="" y="" salud"),"="">Q("PRL y Salud"),</option>
              <option value="R(" farmacia="" y="" laboratorio"),"="">R("Farmacia y laboratorio"),</option>
              <option value="S(" turismo="" y="" restauración"),"="">S("Turismo y restauración"),</option>
              <option value="T(" venta="" al="" detalle");"="">T("Venta al detalle");</option>
            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div>
          <label for="nivel">Nivel</label>
          <div>
            <select id="nivel" name="nivel">
              <option value="A(" 1="" ingenieros="" y="" licenciados"),"="">A("1 Ingenieros y Licenciados"),</option>
              <option value="B(" 2="" ingenieros="" técnicos,="" peritos="" y="" ayudantes="" titulados"),"="">B("2 Ingenieros Técnicos, Peritos y Ayudantes Titulados"),</option>
              <option value="C(" 3="" jefes="" administrativos="" y="" de="" taller"),"="">C("3 Jefes Administrativos y de Taller"),</option>
              <option value="D(" 4="" ayudantes="" no="" titulados"),"="">D("4 Ayudantes no Titulados"),</option>
              <option value="E(" 5="" oficiales="" administrativos"),"="">E("5 Oficiales Administrativos"),</option>
              <option value="F(" 6="" subalternos"),"="">F("6 Subalternos"),</option>
              <option value="G(" 7="" auxiliares="" administrativos"),"="">G("7 Auxiliares Administrativos"),</option>
              <option value="H(" 8="" oficiales="" de="" primera="" y="" segunda"),"="">H("8 Oficiales de primera y segunda"),</option>
              <option value="I(" 9="" oficiales="" de="" tercera="" y="" especialistas"),"="">I("9 Oficiales de tercera y Especialistas"),</option>
              <option value="J(" 10="" peones"),"="">J("10 Peones"),</option>
              <option value="K(" 11="" trabajadores="" <="" 18="" años");"="">K("11 Trabajadores &lt; 18 años");</option>
            </select>
          </div>
        </div>

        <!-- Text input-->
        <div>
          <label for="durcont">Duración del contrato</label>
          <div>
          <input id="durcont" name="durcont" type="text" placeholder="duración">

          </div>
        </div>

        <!-- Text input-->
        <div>
          <label for="horario">Horario</label>
          <div>
          <input id="horario" name="horario" type="text" placeholder="Horario">

          </div>
        </div>

        <!-- Select Basic -->
        <div>
            <label for="tiposal">Tipo de Salario</label>
            <div>
                <select id="tiposal" name="tiposal">
                <option value="BA (" bruto="" año"),"="">BA ("Bruto año"),</option>
                <option value="BM (" bruto="" mes"),"="">BM ("Bruto mes"),</option>
                <option value="BD (" bruto="" día");"="">BD ("Bruto día");</option>
                </select>
            </div>
            </div>

        <!-- Text input-->
        <div>
            <label for="maxsal">Maximo salario</label>
            <div>
            <input id="maxsal" name="maxsal" type="text" placeholder="max">

            </div>
          </div>

          <!-- Text input-->
          <div>
            <label for="minsal">Mínimo salario</label>
            <div>
            <input id="minsal" name="minsal" type="text" placeholder="min">

            </div>
          </div>

          <!-- Text input-->
          <div>
            <label for="benef">Beneficios</label>
            <div>
            <input id="benef" name="benef" type="text" placeholder="Beneficios Sociales">

            </div>
          </div>

        </fieldset>

      </form>
{{-- </div> --}}
</x-appcand>
