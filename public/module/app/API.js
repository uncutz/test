export default function test() {
    let text = { a: "hallo", b: 42 };
    return fetch("/tests/test.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },

        // body: JSON.stringify({ bla: text }),
        body: JSON.stringify(text),
    }).then((response) => {return response.json()
    }).then(data => console.log(data));
}