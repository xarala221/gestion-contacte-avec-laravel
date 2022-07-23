<?php


namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{

    /**
     * Affiche la liste des contacts
     */
    public function index()
    {

        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));

    }


    /**
     * return le formulaire de creation d'un contact
     */
    public function create()
    {

        return view('contact.create');

    }


    /**
     * Enregistre un nouveau contact dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nomComplet'=>'required',
            'email'=> 'required',
            'telephone' => 'required',
            'salaire' => 'required'
        ]);


        $contact = new contact([
            'nomComplet' => $request->get('nomComplet'),
            'email' => $request->get('email'),
            'telephone' => $request->get('telephone'),
            'salaire' => $request->get('salaire')
        ]);


        $contact->save();
        return redirect('/')->with('success', 'Contact Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un contact spécifique
     */

    public function show($id)
    {

        $contact = contact::findOrFail($id);
        return view('contact.show', compact('contact'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $contact = contact::findOrFail($id);

        return view('contact.edit', compact('contact'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nomComplet'=>'required',
            'email'=> 'required',
            'telephone' => 'required',
            'salaire' => 'required'

        ]);




        $contact = contact::findOrFail($id);
        $contact->nomComplet = $request->get('nomComplet');
        $contact->email = $request->get('email');
        $contact->telephone = $request->get('telephone');
        $contact->salaire = $request->get('salaire');


        $contact->update();

        return redirect('/')->with('success', 'contact Modifié avec succès');

    }




    /**
     * Supprime le contact dans la base de données
     */
    public function destroy($id)
    {

        $contact = contact::findOrFail($id);
        $contact->delete();

        return redirect('/')->with('success', 'contact Supprime avec succès');

    }

}
