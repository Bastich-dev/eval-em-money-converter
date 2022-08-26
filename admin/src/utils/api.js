import axios from "axios";

// axios.defaults.withCredentials = true;
axios.defaults.baseURL = "http://127.0.0.1:8000/api";

const api = {
    pingServer: async () => {
        const response = await axios.get("/ping");
        return response?.data?.api_on || false;
        // const response = axios.post("/auth/login", {
        //     // name: "John Doe",
        //     email: "johndoe@example.org",
        //     password: "password",
        //     // password_confirmation: "password",
        // });
    },

    login: async data => {
        try {
            const response = await axios.post("/auth/login", data);
            return response;
        } catch {
            return false;
        }
    },
};

export default api;
