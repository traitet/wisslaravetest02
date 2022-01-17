public function update(Request $request, $id)
    {
        $request->validate([
            'functionId'=>'required',
            'message'=>'required',
            'createdBy'=>'required'
        ]);

        $error = Contact::find($id);
        $error->functionId =  $request->get('functionId');
        $error->message = $request->get('message');
        $error->createdBy = $request->get('createdBy');
        $error->save();

        return redirect('/errors')->with('success', 'Contact updated!');
    }
