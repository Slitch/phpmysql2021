<script>
    function loen_beregn() {
    // SET VARIABLER FOR HVERT INPUT 
    var
    input_bruttoloen =        document.getElementById("input_bruttoloen").value,
    input_fradrag =           document.getElementById("input_fradrag").value,
    input_am_bidrag_pro =     document.getElementById("input_am_bidrag_pro").value,
    input_am_pension_pro =    document.getElementById("input_am_pension_pro").value,
    input_atp_pension =       document.getElementById("input_atp_pension").value,
    input_traekprocent =      document.getElementById("input_traekprocent").value;

    // ===== MELLEM REGNING ===== 
    // INFO: _kr = kroner (omregn procent til kroner)
    // Klargøring a variabler til mellemregning
    // Variablerne burde vaere korrekte nu eller kan du selv kontrollere det
    var 
    am_pension =        (input_bruttoloen / 100) * input_am_pension_pro,
    am_bidrag =         (((input_bruttoloen - input_atp_pension) - am_pension) / 100) * input_am_bidrag_pro,
    a_indkomst =        ((input_bruttoloen - input_atp_pension) - am_pension) - am_bidrag,
    skatte_grundlag =   a_indkomst - input_fradrag,
    skat =              (skatte_grundlag / 100) * input_traekprocent,
    nettoloen =         a_indkomst - skat,
    resultat =          Math.floor(nettoloen);

    // Indsæt resultat i ID
    document.getElementById("loen_result").innerHTML = new Intl.NumberFormat('da-DK').format(resultat) + ' Kr.';
    }
    </script>