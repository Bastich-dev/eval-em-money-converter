import axios from "axios";

// Config
// --------------------------------------------------------------------------------------------------------------
axios.defaults.baseURL = process.env.NODE_ENV = "developpment" ? "http://127.0.0.1:8000/api" : "https://currency-converter-em.herokuapp.com/api";

const withAuth = () => {
    return {
        headers: { Authorization: `Bearer ${localStorage.getItem("token")}` },
        // "Content-Type": "application/json",
        // Accept: "application/json",
    };
};

// Core Actions
// --------------------------------------------------------------------------------------------------------------
export const pingServer = async () => {
    const response = await axios.get("/ping");
    return response?.data?.api_on || false;
};

export const convertCurrencies = async data => {
    const response = await axios.post("/convert", data);
    return response?.data?.data || false;
};

// Auth Actions
// --------------------------------------------------------------------------------------------------------------

export const login = async data => {
    const response = await axios.post("/auth/login", data);
    const token = response?.data?.access_token;
    if (token) {
        localStorage.setItem("token", token);
    }
    return response?.data?.user || false;
};
export const logout = async () => {
    const response = await axios.post("/auth/logout", {}, withAuth());
    if (response.data) localStorage.removeItem("token");
    return response.data || false;
};
export const getUser = async () => {
    const response = await axios.get("/auth/user", withAuth());
    return response.data || false;
};

// CRUD Currencies
// --------------------------------------------------------------------------------------------------------------
export const listCurrency = async () => {
    const response = await axios.get("/currencies", withAuth());
    return response?.data?.data || [];
};
export const addCurrency = async data => {
    const response = await axios.post("/currencies", data, withAuth());
    return response?.data?.data || false;
};
export const editCurrency = async (id, data) => {
    const response = await axios.put("/currencies/" + id, data, withAuth());
    return response?.data?.data || false;
};
export const deleteCurrency = async id => {
    const response = await axios.delete("/currencies/" + id, withAuth());
    return response?.data?.data || false;
};
