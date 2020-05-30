from flask import Flask, jsonify

app = Flask(__name__)

@app.route("/")
def jsonMessage():
    return jsonify({'message': ['1', '2', '3', '4']})

@app.route("/hello")
def hello():
    return "<h1>Hello, this is docker 101 tutorial!!</h1>"


if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=80)