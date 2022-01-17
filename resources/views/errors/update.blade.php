public function update(Request $request, $id)
    {
        $request->validate([
            'functionName'=>'required',
            'message'=>'required',
            'createdBy'=>'required'
        ]);

        $error = Contact::find($id);
        $error->functionName =  $request->get('functionName');
        $error->message = $request->get('message');
        $error->createdBy = $request->get('createdBy');
        $error->save();

        return redirect('/errors')->with('success', 'Contact updated!');
    }
