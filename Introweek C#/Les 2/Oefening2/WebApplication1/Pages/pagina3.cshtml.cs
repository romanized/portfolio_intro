using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace WebApplication1.Pages
{
    public class pagina3Model : PageModel
    {

        public int aantalKeerHome = 0;
        public int aantalKeerPagina2 = 0;
        public int aantalKeerPagina3 = 0;
        public void OnGet()
        {
            string aantalHome = Request.Query["aantalHome"];
            if (aantalHome != null)
            {
                aantalKeerHome = int.Parse(aantalHome);
                string aantalPagina2 = Request.Query["aantalPagina2"];
                aantalKeerPagina2 = int.Parse(aantalPagina2);
                string aantalPagina3 = Request.Query["aantalPagina3"];
                aantalKeerPagina3 = int.Parse(aantalPagina3);

                aantalKeerPagina3++;
            }
        }
    }
}
