
<h2 style="margin-top : 80px;">Proportion de personnes vaccinées</h2>
Chaque carré correspond à 1% des Français<span class="str-table-plus12ans"></span>.
Les carrés vert foncé <svg width="10" height="10"><rect x="0" y="0" width="60" height="60" style="fill:#319986;" /></svg> correspondent aux Français <span class="str-table-plus12ans"></span> complètement vaccinés
et les carrés vert clair <svg width="10" height="10"><rect x="0" y="0" width="60" height="60" style="fill:#58c7b2;" /></svg> aux Français <span class="str-table-plus12ans"></span> ayant commencé leur vaccination. Les carrés gris <svg width="10" height="10"><rect x="0" y="0" width="60" height="60" style="fill:rgba(0, 0, 0, 0.25);" /></svg> représentent les Français <span class="str-table-plus12ans"></span> qu'il faut vacciner avant d'atteindre un taux de vaccination de 100%.
<!--Les carrés rouge clair <svg width="10" height="10"><rect x="0" y="0" width="60" height="60" style="fill: rgb(207, 169, 169);" /></svg>  représentent les autres Français non vaccinés. -->
<i>Mise à jour : <span id="date_maj_3">--/--</span></i>
<br><br>
<select id="selectTable" onchange="selectTableChanged()">
    <option value="population">Toute la population</option>
    <option value="plus12ans">Population éligible (12+ ans)</option>
</select>

<div class="row">
    <div class="col-md-6" style="padding-top: 20px;">
        <div id="tablea_div" style="width:80vw; height:80vw; max-width: 400px; max-height: 400px;">
            <table style="width:100%; height:100%" id="tableauVaccin"></table>
        </div>
    </div>
    <br>
    <div class="col-md-4" style="padding-top: 20px;">
        <span style="font-size: 200%; color: #58c7b2"><span id="proportionVaccinesMax">--</span>%</span><br> des Français<span class="str-table-plus12ans"></span> ont reçu au moins une dose de vaccin, 
        <span style="color: #319986"><span id="proportionVaccinesTotalement">--</span>%</span> ont reçu toutes les doses requises.<br><br>
        Il reste à vacciner au moins <br><span style="font-size: 200%; color: rgba(0, 0, 0, 0.3);"><span id="proportionAVaccinerImmu">--</span>%</span><br>des Français<span class="str-table-plus12ans"></span> avant d'atteindre un taux de vaccination de 100%. <br><br>
        <!--<span style="font-size: 80%;">
            N.B. : un taux de vaccination de 80% ne permet pas nécessairement d'atteindre une immunité collective.<br>
        </span>-->
    </div>
</div>
<br>

<div class="alert-data" style="margin-top: 15px;">
    <span style="font-size: 80%;">
        <b>Source des données</b> : CovidTracker / Ministère de la Santé.</a>
    </span>
</div>
