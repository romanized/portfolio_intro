using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace Opdracht_2_1.Pages
{
    public class Pagina3Model : PageModel
    {
        //Zet hier een public variabele voor de uitkomst
        public int getal1;
        public int getal2;
        public int uitkomst;

        public void OnGet()
        {
            //lees de twee meegestuurde parameters in
            string getal1String = Request.Query["getal1"];
            string getal2String = Request.Query["getal2"];
            if (getal2String != null)   //controleer of de parameters gevuld zijn
            {
                //bepaal de waarde voor getal 1
                int getal1 = int.Parse(getal1String);
                //doe hetzelfde voor getal 2
                int getal2 = int.Parse(getal2String);
                uitkomst = getal1 + getal2;//bereken de uitkomst
            }
        }
    }
}
