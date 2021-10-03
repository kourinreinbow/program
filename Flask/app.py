from flask import Flask
from flask import render_template, request

app=Flask(__name__)

@app.route('/')
def hello(name):
    return render_template('index.html',name=name)

@app.route('/signin', methods=['GET','POST'])
def signin():
    if request.method=='POST':
        number = request.form.get('number')

    else:
        return render_template('signin.html')

if __name__=="__main__":
    app.run(debug=True)