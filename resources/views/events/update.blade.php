public function update(Request $request, $id)
    {
        $request->validate([
            'functionName'=>'required',
            'message'=>'required',
            'createdBy'=>'required'
        ]);

        $event = Contact::find($id);
        $event->functionName =  $request->get('functionName');
        $event->message = $request->get('message');
        $event->createdBy = $request->get('createdBy');
        $event->save();

        return redirect('/events')->with('success', 'Contact updated!');
    }
