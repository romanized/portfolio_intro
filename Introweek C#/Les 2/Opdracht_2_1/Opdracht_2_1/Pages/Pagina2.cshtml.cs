using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace Opdracht_2_1.Pages
{
    public class Pagina2Model : PageModel
    {
        public int getal1; 

        public void OnGet()
        {
            string getal1String = Request.Query["getal1"];
            if (getal1String != null)
            {
                getal1 = int.Parse(getal1String);
                //vul hier getal1 met de juiste waarde
            }
        }
    }
}
