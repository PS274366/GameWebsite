export function sendRequest(method: string, url: string, body: string, headers: Headers = new Headers({"Content-Type": "application/json"}), credentials: RequestCredentials = "same-origin"): Promise<Response> {
    const request = new Request(url, {
        method: method,
        headers: headers,
        credentials: credentials,
        body: body
    });

    return fetch(request);
}