# -*- coding: utf-8 -*-
import logging
import requests
import random

from time import sleep
from selenium import webdriver
from datetime import datetime

import log

def test_login(driver):
    btn_url = driver.find_element_by_class_name("login").find_element_by_tag_name("a").get_attribute("href")
    driver.get(btn_url)
    id_box = driver.find_element_by_id("account")
    pwd_box = driver.find_element_by_id("password")

    id_box.clear()
    id_box.send_keys("jerry")
    pwd_box.clear()
    pwd_box.send_keys("kid")
    sleep(1)

    sbm_btn = driver.find_element_by_id("sbm_btn")
    sbm_btn.click()

    sleep(2)

    if "index2.html" in driver.current_url:
        logging.info("Successfully logged in ")
    else:
        logging.info("Login error")

def test_restaurantSearch(driver):
    search_box = driver.find_element_by_id("RestaurantName")
    search_box.clear()
    search_box.send_keys("Hesse")
    sleep(1)

    srch_btn = driver.find_element_by_id("button")
    srch_btn.click()

    sleep(2)

    if driver.find_elements_by_tag_name("tbody"):
        logging.info("Successfully finished searching ")
    else:
        if driver.find_element_by_id("msg") == "Not found":
            logging.info("No result. --Successful")
        else: 
            logging.info("Something's wrong...")



