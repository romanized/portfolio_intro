using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace Oefening1.Pages;

public class IndexModel : PageModel
{
    public string mijnNaam;
    public int mijnStudentnummer;
    public int mijnLeeftijd;

    public void OnGet()
    {
        string naam = Request.Query["mijnNaam"];
        string studentNummer = Request.Query["mijnStudentnummer"];
        string leeftijd = Request.Query["mijnLeeftijd"];

        if (naam != null)
        {
            mijnNaam = naam;
        }
        if (studentNummer != null)
        {
            mijnStudentnummer = int.Parse(studentNummer);
        }
        if (leeftijd != null)
        {
            mijnLeeftijd = int.Parse(leeftijd);
        }
    }
}

