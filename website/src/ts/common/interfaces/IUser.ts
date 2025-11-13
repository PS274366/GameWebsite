interface IUser {
    email: string;
    phonenumber?: string;
    username: string;
    password: string;
    age: number;
}

export {
    type IUser as default
}