using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using System.ComponentModel.DataAnnotations;

namespace Les_3.Pages
{
    public class IndexModel : PageModel
    {
        public string naaminv;
        public string emailinv; 
        public string datuminv;
        public class invoerdata{
            public string Naam;
            public string Datum;
            public string Email;

            public invoerdata(string naaminv, string emailinv, string datuminv) {
                Naam = naaminv;
                Datum = datuminv;
                Email = emailinv;
            }
        }

        // Properties with validation attributes
        [Required(ErrorMessage = "Volledige naam is verplicht.")]
        [BindProperty]
        public string Naam { get; set; }

        [Required(ErrorMessage = "Email is verplicht.")]
        [EmailAddress(ErrorMessage = "Ongeldige email adres.")]
        [BindProperty]
        public string Email { get; set; }

        [Required(ErrorMessage = "Geboortedatum is verplicht.")]
        [BindProperty]
        public string Datum { get; set; }

        public string Resultaat1 { get; set; }
        public string Resultaat2 { get; set; }
        public string Resultaat3 { get; set; }

        public void OnGet()
        {

        }

        public IActionResult OnPost(string naam, string email, string datum)
        {
            if (ModelState.IsValid)
            {
                var data = new invoerdata(naam, datum, email);
                naaminv = naam;
                datuminv = datum;
                emailinv = email;
                Resultaat1 = $"Uw naam: {naam}";
                Resultaat2 = $"Uw email: {email}";
                Resultaat3 = $"U ben op {datum} geboren";
                
                return Page(); // Return the same page with the result messages
            }
            else
            {
                // Handle the validation errors here (they will also be automatically displayed next to each input)
                return Page(); // Return the same page to display the errors
            }
        }
    }
}
