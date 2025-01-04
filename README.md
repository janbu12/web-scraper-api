<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Web Scraper Laravel Api

This API is built using Laravel Framework, this API uses Laravel's built-in `GuzzleHttp\Client` to make HTTP requests to web pages. It supports both GET and POST requests, and provides various options for scraping data from HTML content.

And what I scrap is the web  [Dot Property](https://www.dotproperty.id/en)

## Installation Instructions
- Composer Install
  <p> Install PHP dependencies using Composer:
      
  ```bash
      composer install
  ```
- Npm Install
  <p> Install JavaScript dependencies using NPM:
      
  ```bash
      npm install
  ```
- Make env & API Key
  <p> create file .env and copy .env.example to .env, and insert api key

- Migrate

  ```bash
      php artisan migrate
  ```
  <p> just enter or yes

- Generate Key
  <p> Generate the application key for Laravel:
      
  ```bash
      php artisan key:gen
  ```

- Php Artisan Serve
  <p> Start the Laravel development server:
      
  ```bash
      php artisan serve
  ```

# API Documentation

## Overview
This API provides endpoints for fetching property listings and details based on specified regions, cities, or districts. Each request requires a valid API key for authentication. default `api-key` is <b>"ags611bakjah"</b>

## Routes
<p>You can use git bash with the command below, or use a third-party application</p>

### 1. **GET /api/properties**
   - **Description:** Fetch all available properties without any regional filters.
   - **Usage:**
     ```bash
        curl -i -H "api-key: {YOUR_KEY}" http://localhost:8000/api/properties
     ```
   - **Response:**
     ```json
     [ 
        {
            "id": "2-bedroom-villa-for-sale-in-canggu-bali_7963bd47ee54-c3be-36d5-5ee5-5958f732",
            "href": "/property/2-bedroom-villa-for-sale-in-canggu-bali_7963bd47ee54-c3be-36d5-5ee5-5958f732",
            "title": "2 Bedroom Villa for sale in Canggu, Bali",
            "images": [
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi8wZmMyZDk3YS05OTNjLTQ5NTktYmU2YS1hZDE4NTg2ODVlNjIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9jYWFhNDE4MS0yN2Q1LTRkZmEtOTk1OC1iYWM0MWJhYmZkZWEuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9lM2RjYmFkNy03ZmIzLTQxNDAtYWZiNi1kN2FkZTkyM2NjMjkuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9jYmYwZDNhZS1lNDg5LTRkNTAtYTQ1Yi03YWI4MTFiMmM3N2EuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi80Y2VhMTEyMS04Y2FjLTQ5YzctYjEwYy1kYTYyYzgzNzljNjkuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi82ODQ3YzkyOC1jYjU5LTRlMzMtYWYxMC1lZTFmZDhmODYwMzIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9hZDBhNDQyYy04OGQwLTQ0N2ItYWQ3Yi1iNjI2NzhkODFjMzcuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9iMWZlYzU2Ni01OTM2LTRkY2QtYTZlNC1iOTM2N2Y0NzEzZWMuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9lOTlhYzVjYS03ZGZjLTQ4ZDYtYWNhZS1kNGZiYmQ0NjgyNjcuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi85YzI2MzU5MS05NzFjLTQ4MDYtYWVjZC00M2MxMWVkNTBlZGMuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi8zZDFiZDY5MS03ZTIyLTQxZTgtODk2Ni01NmYyOTFlMTY2MTUuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9jZTY0NWRmZi1mYTUxLTQwYzktODliMy0zMmI0ZmZkODEyNTguanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9hODAzNjE5My05N2JkLTQ4ZDMtYjFkYS1iMmZlZjRiNGNiMTcuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi81ZjJkZWRhZS05YzIzLTRkNGYtYjAxYy03OTFkYzI0MDgxNWEuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi85NTAyN2JmNS03ZGNkLTQ1OTctODgyZS02NDIxMDA2ZWZjMGUuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi85MDM1OTdhNy1jMWI3LTQzYTAtYTJiYi1kYzAwNTIwM2EwZTQuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi84YjUwZWUwMi03MWZjLTQyMGItOTQ1Mi03NDcxYWRiNTg0YjcuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9lZThkZDhjZS1mNmVjLTQ4OWMtODJlYS00MjU1YjQ2NTIyNzguanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi83N2M4MjdkMS1kM2EyLTQ0N2QtYjE4OS0yOWYxM2EzNmZhYzYuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi84NDFjYTAwNC0xNzE0LTQwZjYtYjY1My0wODQyZDExOGY1ZmYuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9lMDQwMzZlMy0xZTA4LTRlNjQtODI4ZC0yZTQzOTY0MDE1NDguanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi8wYjRiNTc4YS1jMWFjLTQzYmMtYWMwMy01M2NiNzU5YWE1MWUuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi8wNjFlZTZlZi00YmMyLTRkNWMtOWZiMC1lMTVhNzgyZWFjYjkuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi80M2JlZGFlZi0xMzNkLTRkODMtOGQ4ZS02YTkwZDJkOTJlNmIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi8zNGM5NWMxZC0zMzU4LTQ3NWMtYjZjMC0zMjY4YjM4YzBlY2QuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9hODM2NGEzMS00MTUwLTQ5MmUtOTMzZi05NDAxZDMzZTA1ZjQuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi80MTdiNTY2YS1iNDI3LTQwNDQtYTZhZC0zMzQ2MzZmYTRjNWUuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9mNDE4YzA1My04Y2I1LTRiNDQtOTQwNi03OGZjOTM5NmM4MjguanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzc2MmExNDA0LTRiYjQtNGMzNi1iZTZkLTU0YmIyNWNlNjMwMi9lMTE3MWE3ZC0zOGFlLTQ1NjUtOGRiOS04MjVmMGI0ZWJmYTIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19"
            ],
            "price": "RP 5.5 billion",
            "detail_price": "(RP 25,345,622 / m2)",
            "location": "Badung, Bali",
            "badges": [
                {
                    "text": "2",
                    "img_src": "https://build.dotproperty.id/assets/bed-f218f335.svg"
                },
                {
                    "text": "2",
                    "img_src": "https://build.dotproperty.id/assets/bathtub-3411ca68.svg"
                },
                {
                    "text": "217 m2",
                    "img_src": "https://build.dotproperty.id/assets/resize-695d0a43.svg"
                },
                {
                    "text": "Villa",
                    "img_src": "https://build.dotproperty.id/assets/home-14376d6d.svg"
                }
            ],
            "fasilities": [
                "Swimming pool",
                "Air conditioning",
                "Internet",
                "Security",
                "Car park",
                "Balcony",
                "Equipped kitchen",
                "+2"
            ],
            "description": "Nestled in a serene complex area, this dream home in the heart of Canggu offers not only luxury living but also the assurance of security and tranquility. Situated within a quiet complex, the property provides residents with the added comfort of CCTV surveillance and security guard at night, ensuring peace of mind and a sense of privacy.Indulge in the tropical charm of this two-story residence, spanning..."
         },
     ]
     ```
---

### 2. **GET /api/properties/{region}**
   - **Description:** Fetch properties filtered by a specific region, such as a province or state.
   - **Path Parameter:**
     - `region`: The region name, e.g., "west-java".
   - **Usage:**
     ```bash
        curl -i -H "api-key: {YOUR_KEY}" http://localhost:8000/api/properties/west-java
     ```
   - **Response:**
        ```json
        [
            {
                "id": "3-bedroom-commercial-for-sale-in-semplak-barat-west-java_5d9558c80371-d050-d7c2-3a23-05898089",
                "href": "/property/3-bedroom-commercial-for-sale-in-semplak-barat-west-java_5d9558c80371-d050-d7c2-3a23-05898089",
                "title": "3 Bedroom Commercial for sale in Semplak Barat, West Java",
                "images": [
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-7e9f-7015-a64d-d680efb0f7a5.bin",
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-7f8b-73f7-825c-061babe67279.bin",
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-7ffd-7305-ad05-ae9e1012991d.bin",
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-8045-713c-8fe6-1996991cc287.bin",
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-8096-7273-b417-370be05fceb3.bin",
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-80cd-70e1-a004-fe89386dbcda.bin",
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-80eb-72ed-8d63-a11185371e2b.bin",
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-8108-71e6-a04a-bbdcd2af2073.bin",
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-8125-704b-8803-d419e2524cbf.bin",
                    "https://images.proppit.com/properties/01910149-67f6-7d2c-949c-82691d1440c4/01910149-814c-70fe-8d7f-020d37939ccb.bin"
                ],
                "price": "RP 999,000,000",
                "detail_price": "(RP 3,842,308 / m2)",
                "location": "Bogor, West Java",
                "badges": [
                    {
                        "text": "3",
                        "img_src": "https://build.dotproperty.id/assets/bed-f218f335.svg"
                    },
                    {
                        "text": "2",
                        "img_src": "https://build.dotproperty.id/assets/bathtub-3411ca68.svg"
                    },
                    {
                        "text": "260 m2",
                        "img_src": "https://build.dotproperty.id/assets/resize-695d0a43.svg"
                    },
                    {
                        "text": "Commercial",
                        "img_src": "https://build.dotproperty.id/assets/home-14376d6d.svg"
                    }
                ],
                "fasilities": [
                    "Security",
                    "Car park",
                    "CCTV",
                    "Cellar"
                ],
                "description": "**Dijual: Tempat Usaha 3,5 Lantai + Tempat Tinggal di Atang Sanjaya, Rancabungur, Bogor**📍 **Lokasi Strategis Pinggir Jalan****Detail Properti:**- **Luas Bangunan:** 260 m²- **Luas Tanah:** 300 m²- **Surat:** Sertifikat SHM**Fitur:**- **Lantai 3:** Cocok untuk Usaha Rumah Makan- **Lantai 2:** Rumah Tinggal- **Lantai 1:** Area Kosong**Spesifikasi:**- Ruang Makan- 2 Balkon- 2 Kamar Mandi- 3 Kamar..."
            },
            {
                "id": "4-bedroom-apartment-for-sale-in-cihanjuang-west-java_ea3903882a76-1e5e-0772-ea71-a4017089",
                "href": "/property/4-bedroom-apartment-for-sale-in-cihanjuang-west-java_ea3903882a76-1e5e-0772-ea71-a4017089",
                "title": "4 Bedroom Apartment for sale in Cihanjuang, West Java",
                "images": [
                    "https://images.proppit.com/properties/0192895f-82fb-7229-b4b8-32f7116906fb/0192895f-9072-7297-a92e-f8d491c42aa8.bin",
                    "https://images.proppit.com/properties/0192895f-82fb-7229-b4b8-32f7116906fb/0192895f-9120-73ca-888c-370e4da80af6.bin",
                    "https://images.proppit.com/properties/0192895f-82fb-7229-b4b8-32f7116906fb/0192895f-915a-7101-bfb0-accc3203872e.bin",
                    "https://images.proppit.com/properties/0192895f-82fb-7229-b4b8-32f7116906fb/0192895f-91ad-725f-98fd-5f7bc07aa8ff.bin"
                ],
                "price": "RP 780,000,000",
                "detail_price": "(RP 9,069,767 / m2)",
                "location": "Bandung Barat, West Java",
                "badges": [
                    {
                        "text": "4",
                        "img_src": "https://build.dotproperty.id/assets/bed-f218f335.svg"
                    },
                    {
                        "text": "2",
                        "img_src": "https://build.dotproperty.id/assets/bathtub-3411ca68.svg"
                    },
                    {
                        "text": "86 m2",
                        "img_src": "https://build.dotproperty.id/assets/resize-695d0a43.svg"
                    },
                    {
                        "text": "Apartment",
                        "img_src": "https://build.dotproperty.id/assets/home-14376d6d.svg"
                    }
                ],
                "fasilities": [
                    "Internet",
                    "Car park",
                    "Garden",
                    "Balcony",
                    "Electricity",
                    "Roof garden",
                    "Terrace",
                    "CCTV",
                    "Built-in kitchen",
                    "+1"
                ],
                "description": "🏢 **Kos-Kosan Investasi Menarik di Cihanjuang, Harga Mulai 700 Jutaan!** 🏢Ingin berinvestasi di properti yang strategis dan menguntungkan? Kos-kosan 2 lantai di daerah **Cihanjuang** ini adalah pilihan tepat untuk Anda! Cocok untuk disewakan kepada mahasiswa atau profesional yang bekerja di sekitar area.✨ **Spesifikasi Kos-Kosan:**- 4 Kamar Tidur nyaman- 2 Kamar Mandi- 1 Garasi mobil- 2 Lantai-..."
            },
        ]
        ```
---

### 3. **GET /api/properties/{region}/{city}**
   - **Description:** Fetch properties filtered by a specific region and city.
   - **Path Parameters:**
     - `region`: The region name, e.g., "west-java".
     - `city`: The city name, e.g., "bandung".
   - **Usage:**
     ```bash
        curl -i -H "api-key: {YOUR_KEY}" http://localhost:8000/api/properties/west-java/bandung
     ```
   - **Response:**
        ```json
        [
            {
                "id": "4-bedroom-house-for-sale-in-batununggal-west-java_5bc7e90e9e7f-b440-9822-afdc-efa18089",
                "href": "/property/4-bedroom-house-for-sale-in-batununggal-west-java_5bc7e90e9e7f-b440-9822-afdc-efa18089",
                "title": "4 Bedroom House for sale in Batununggal, West Java",
                "images": [
                    "https://images.proppit.com/properties/01918fab-dcaf-7710-955e-a2b0b90b2de4/01918fac-bd51-706e-a000-f9c4b7afd8b4.bin",
                    "https://images.proppit.com/properties/01918fab-dcaf-7710-955e-a2b0b90b2de4/01918fac-be13-71f3-89a3-8daac9dfb08f.bin",
                    "https://images.proppit.com/properties/01918fab-dcaf-7710-955e-a2b0b90b2de4/01918fac-be3a-7142-996e-bd0013d72094.bin",
                    "https://images.proppit.com/properties/01918fab-dcaf-7710-955e-a2b0b90b2de4/01918fac-be54-7266-839b-11901e57e1ff.bin",
                    "https://images.proppit.com/properties/01918fab-dcaf-7710-955e-a2b0b90b2de4/01918fac-be71-7107-9999-1d78ccf67bbe.bin"
                ],
                "price": "RP 5.5 billion",
                "detail_price": "(RP 25,000,000 / m2)",
                "location": "Bandung, West Java",
                "badges": [
                    {
                        "text": "4",
                        "img_src": "https://build.dotproperty.id/assets/bed-f218f335.svg"
                    },
                    {
                        "text": "3",
                        "img_src": "https://build.dotproperty.id/assets/bathtub-3411ca68.svg"
                    },
                    {
                        "text": "220 m2",
                        "img_src": "https://build.dotproperty.id/assets/resize-695d0a43.svg"
                    },
                    {
                        "text": "House",
                        "img_src": "https://build.dotproperty.id/assets/home-14376d6d.svg"
                    }
                ],
                "fasilities": [
                    "Internet",
                    "Security",
                    "Garden",
                    "Electricity",
                    "Terrace",
                    "Water",
                    "CCTV",
                    "Cellar",
                    "Cistern"
                ],
                "description": "Jual Rumah Bagus Siap Huni Di Batununggal Indah Bandung Jual Rumah Soekarno Hatta Buahbatu Bandung> Jumlah Lantai : 1 lantai> Luas Tanah :374> Luas Bangunan :220> Bentuk Tanah : kotak> Lebar Muka :20> Panjang tanah : 17,7> Orientasi Hadap :utara dan barat> Kamar Tidur : 4 Kamar mandi:3> kamar Art:>kamar mandi ART:> Pasokan Listrik :2200> Sumber Air : pam> Garasi : > Carport : 2mobil> Legalitas :SHMINFOFIRMAN08191009----"
            },
            {
                "id": "3-bedroom-house-for-sale-in-cibeureum-west-java_bfe138e933b4-28ff-6992-b28a-51a26089",
                "href": "/property/3-bedroom-house-for-sale-in-cibeureum-west-java_bfe138e933b4-28ff-6992-b28a-51a26089",
                "title": "3 Bedroom House for sale in Cibeureum, West Java",
                "images": [
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTM3Zjg0LWYxN2UtNzAwMy1hYTE3LTVlNjYwYjE2OGJhZS8wMTkzN2Y4NS0wMWQ0LTcyOTEtOGM5Mi1kN2VlZDdhMGU5YjIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTM3Zjg0LWYxN2UtNzAwMy1hYTE3LTVlNjYwYjE2OGJhZS8wMTkzN2Y4NS0wMmEzLTcyYzQtOWQ2Yi1iMzQ5ODUyOTIyOGMuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTM3Zjg0LWYxN2UtNzAwMy1hYTE3LTVlNjYwYjE2OGJhZS8wMTkzN2Y4NS0wMmU0LTczYjEtOTY0ZS0yMzIwM2Y3OGYxNTIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTM3Zjg0LWYxN2UtNzAwMy1hYTE3LTVlNjYwYjE2OGJhZS8wMTkzN2Y4NS0wMzM3LTczOGEtOTQ0YS1kMDU2OGJlYzc5NWIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTM3Zjg0LWYxN2UtNzAwMy1hYTE3LTVlNjYwYjE2OGJhZS8wMTkzN2Y4NS0wMzU0LTcwNTktOTQzMC03M2RhZWQyOWFhZTEuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTM3Zjg0LWYxN2UtNzAwMy1hYTE3LTVlNjYwYjE2OGJhZS8wMTkzN2Y4NS0wM2FmLTczNDAtOWRmOS1lODRiMzIwZDI5OWYuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTM3Zjg0LWYxN2UtNzAwMy1hYTE3LTVlNjYwYjE2OGJhZS8wMTkzN2Y4NS0wM2M5LTcwNjItOWU4MC1iYTljMmFiNjhhZDAuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19"
                ],
                "price": "RP 6.725 billion",
                "detail_price": "(RP 46,379,310 / m2)",
                "location": "Bandung, West Java",
                "badges": [
                    {
                        "text": "3",
                        "img_src": "https://build.dotproperty.id/assets/bed-f218f335.svg"
                    },
                    {
                        "text": "3",
                        "img_src": "https://build.dotproperty.id/assets/bathtub-3411ca68.svg"
                    },
                    {
                        "text": "145 m2",
                        "img_src": "https://build.dotproperty.id/assets/resize-695d0a43.svg"
                    },
                    {
                        "text": "House",
                        "img_src": "https://build.dotproperty.id/assets/home-14376d6d.svg"
                    }
                ],
                "fasilities": [
                    "Internet",
                    "Security",
                    "Car park",
                    "Garden",
                    "Terrace",
                    "Water"
                ],
                "description": "House for sale of 145sqm, consisting of 3 bedrooms and 3 bathrooms located at Cibeureum, Bandung. Facilities include: Internet, Security, Car park, Garden, Terrace and Water."
            },
        ]
        ```
---

### 4. **GET /api/properties/{region}/{city}/{district}**
   - **Description:** Fetch properties filtered by region, city, and district for more granular results.
   - **Path Parameters:**
     - `region`: The region name, e.g., "west-java".
     - `city`: The city name, e.g., "bandung".
     - `district`: The district name, e.g., "cisaranten-kulon".
   - **Usage:**
     ```bash
        curl -i -H "api-key: {YOUR_KEY}" http://localhost:8000/api/properties/west-java/bandung/cisaranten-kulon
     ```
   - **Response:**
        ```json
        [
            {
                "id": "2-bedroom-house-for-sale-in-cisaranten-kulon-west-java_e1cd18e0c1a0-1a11-dcc2-adb3-aa6a6089",
                "href": "/property/2-bedroom-house-for-sale-in-cisaranten-kulon-west-java_e1cd18e0c1a0-1a11-dcc2-adb3-aa6a6089",
                "title": "2 Bedroom House for sale in Cisaranten Kulon, West Java",
                "images": [
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04MGRlLTcxZGItYmUxZi04YmVmZTgwYzUyODguanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04MWUzLTczZDItYmFlYi0yNWEyNDYyZWY4YTMuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04MjE1LTcwYWItOTliYy1hMzA2ODFiYjZhNDYuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04Mjc1LTcxZWItYTllYy0zZjRhMWU4YjNhMDguanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04MmM1LTcwNDItYTQzNS04MWQ5OGViYTIxMWUuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04MzBlLTczOGQtODFiMi05N2RjOTljZWVkNWQuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04MzJhLTczMTktODdiNS1jMjMwNjY1ODg0NjguanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04MzQ1LTcyOWEtOTBjZS1iMmM3OWU5ZjYwMGYuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04MzVmLTcxNzktYmI4Yi1kNmE3MTI1MzY0NjcuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04MzhkLTcwNjYtYjM3MC1mNWIxNGY4ODU2MjguanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04M2UwLTcwYmMtOTliNC03MzA4YjM3ZmZjYzkuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04M2ZjLTcyN2UtYjY4OC1jZmMzZjA2MDAyNGUuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04NDQzLTcxNmItYmY0MS0yYThhMTkxZjliOWIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04NDYwLTcyMTItOGY0NS1kYWU5MWUyYzE1MjIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04NGFkLTcxY2QtODEyMC0zMTNiMjQ2Zjc5OTIuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04NGZmLTcxYTMtYmZjNS03YTgxMTY0Y2FiOTguanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19",
                    "https://pix.dotproperty.co.th/eyJidWNrZXQiOiJwcmQtbGlmdWxsY29ubmVjdC1iYWNrZW5kLWIyYi1pbWFnZXMiLCJrZXkiOiJwcm9wZXJ0aWVzLzAxOTNmM2ZmLTZlY2YtN2RkYy04OGY4LTlmOGQ5YjE4Y2Q4Yi8wMTkzZjNmZi04NTY0LTcxZWItYjA1YS0yZDg1NTc2YWI4MzMuanBnIiwiYnJhbmQiOiJET1RQUk9QRVJUWSIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDkwLCJoZWlnaHQiOjMyNSwiZml0IjoiY292ZXIifX19"
                ],
                "price": "RP 795,000,000",
                "detail_price": "(RP 12,822,581 / m2)",
                "location": "Bandung, West Java",
                "badges": [
                    {
                        "text": "2",
                        "img_src": "https://build.dotproperty.id/assets/bed-f218f335.svg"
                    },
                    {
                        "text": "2",
                        "img_src": "https://build.dotproperty.id/assets/bathtub-3411ca68.svg"
                    },
                    {
                        "text": "62 m2",
                        "img_src": "https://build.dotproperty.id/assets/resize-695d0a43.svg"
                    },
                    {
                        "text": "House",
                        "img_src": "https://build.dotproperty.id/assets/home-14376d6d.svg"
                    }
                ],
                "fasilities": [
                    "Security",
                    "Car park",
                    "Water",
                    "CCTV"
                ],
                "description": "DIJUAL RUMAH CLUSTER BARU MEWAH 5 UNIT DI ARCAMANIK KOTA BANDUNGRumah Dijual Di Arcamanik Kota Bandung Perumahan Cluster Baru Mewah Murah Jual Dekat AntapaniTerdapat 3 Tipe Unit dalam Rivulet Cluster ini, diantaranya:1. Tipe 62 untuk 2 Kamar Tidur 2. Tipe 70 untuk 3 Kamar Tidur3. Tipe 85 untuk 4 kamar Tidur- Tipe 62/63 RIVULET CLUSTERLuas Bangunan 62 m2Luas Tanah 63 m22 Kamar Tidur Lt.21 Kamar Mandi..."
            },
            {
                "id": "5-bedroom-house-for-sale-in-cisaranten-kulon-west-java_202797e4b386-af0f-3632-a5e8-91c18089",
                "href": "/property/5-bedroom-house-for-sale-in-cisaranten-kulon-west-java_202797e4b386-af0f-3632-a5e8-91c18089",
                "title": "5 Bedroom House for sale in Cisaranten Kulon, West Java",
                "images": [
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-83a0-70ce-829f-bffeb59be851.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-84ab-7158-8f7e-da1a1c7ec859.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-84fa-73e2-9502-bb934d1f7e99.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-853c-7120-adb4-624e106fa4d6.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8574-73be-8a6b-0e00a345fa47.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8595-7027-98a9-a7a0e8ac1728.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-85ee-733b-ba87-3099c56eb582.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-860f-71f4-8424-322486e0864f.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8637-7060-97bc-738d9346df0c.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-865c-73b7-9894-cb18b0354c61.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-867a-73ed-a633-b9473e0b86ef.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8696-72b7-ae1f-c11b34e0793c.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-86be-73cd-bc94-6a7002131b33.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-86de-739b-80c7-b854b0aee67b.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-870d-73c7-b488-e348f25cd1bc.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8739-7050-b74d-e77ad013f08b.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8759-735b-af88-60298c35f604.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8777-719a-9543-c52b0107a98d.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-87be-73d4-8973-6366f7d7fd70.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8806-7091-8ff9-d1442ad8d822.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8823-737c-9c4f-14829ff24867.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-8860-706d-94ba-a16a2117de28.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-887e-734c-a4d1-bdb1ae3d1b68.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-88a1-71f4-8285-c0ba6c8106ad.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-88d2-7281-92b4-9a08ea24b125.bin",
                    "https://images.proppit.com/properties/01918d80-1b4f-7636-a9af-316e5b202797/01918d80-891c-71b4-a694-1509a5f5e2b9.bin"
                ],
                "price": "RP 2.25 billion",
                "detail_price": "(RP 8,035,714 / m2)",
                "location": "Bandung, West Java",
                "badges": [
                    {
                        "text": "5",
                        "img_src": "https://build.dotproperty.id/assets/bed-f218f335.svg"
                    },
                    {
                        "text": "2",
                        "img_src": "https://build.dotproperty.id/assets/bathtub-3411ca68.svg"
                    },
                    {
                        "text": "280 m2",
                        "img_src": "https://build.dotproperty.id/assets/resize-695d0a43.svg"
                    },
                    {
                        "text": "House",
                        "img_src": "https://build.dotproperty.id/assets/home-14376d6d.svg"
                    }
                ],
                "fasilities": [
                    "Air conditioning",
                    "Internet",
                    "Garden",
                    "Electricity",
                    "Alarm",
                    "CCTV"
                ],
                "description": "Good Deals_Rumah Lama Terawat siap Huni di Antapani Bandung Timur_Luas Tanah 140 m²Luas Bangunan 280 m²Lebar Muka : 8 meterKamar Tidur : 5Kamar Mandi : 2SHMHadap TimurCarport 2 mobilListrik 3300 wattAir SubmersibleHarga PenawaranRp. 2,250,000,000 nego• Lokasi Strategis• Bebas Banjir• Dekat Pusat Belanja Modern & Tradisional• Dekat ke Jl. Soekarno HattaMore infoMuji Balindo Realty08212883----"
            },
        ]
        ```
---

### 5. **GET /api/property/{slug}**
   - **Description:** Fetch detailed information for a specific property based on its slug.
   - **Path Parameter:**
     - `slug`: The unique identifier for the property, extracted from its URL, e.g., "4-bedroom-house-for-sale-in-cisaranten-kulon-west-java_7f976d702a2d-ab7f-e898-5d1e-91eb0015"
   - **Usage:**
     ```bash
        curl -i -H "api-key: {YOUR_KEY}" http://localhost:8000/api/property/4-bedroom-house-for-sale-in-cisaranten-kulon-west-java_7f976d702a2d-ab7f-e898-5d1e-91eb0015
     ```
   - **Response:**
        ```json
        {
            "title": "Rumah Arcamanik Dkt Cisaranten Antapani Bandung",
            "breadcrumb": [
                "Houses for Sale",
                "West Java",
                "Bandung",
                "Cisaranten Kulon",
                "4 Bedroom House for sale in Cisaranten Kulon, West Java"
            ],
            "view-price": "Sale: RP 2.47 billion",
            "price-value": 2470000000,
            "location": "West Java, Bandung, Cisaranten Kulon",
            "title-description": "4 Bedroom House for sale in Cisaranten Kulon, West Java",
            "description": "\n                                            Dijual rumah lama hook terawat siap huni Arcamanik<br>\n<br>\nSpesifikasi :<br>\n&gt; Bangunan Tahun : 1997<br>\n&gt; Jumlah Lantai : 1<br>\n&gt; Luas Tanah : 356 m²<br>\n&gt; Luas Bangunan : 200 m²<br>\n&gt; Bentuk Tanah : Hook<br>\n&gt; Lebar Muka : 16 m²<br>\n&gt; Panjang tanah : <br>\n&gt; Orientasi Hadap : Selatan <br>\n&gt; Kamar Tidur : 4<br>\n&gt; Kamar Mandi : 3<br>\n&gt; Kamar Tidur Pembantu : -<br>\n&gt; Kamar Mandi Pembantu : -<br>\n&gt; Pasokan Listrik : 2200 watt<br>\n&gt; Sumber Air : PDAM<br>\n&gt; Garasi : <br>\n&gt; Carport : 4 Mobil<br>\n&gt; Akses Jalan : 2 Mobil<br>\n&gt; Legalitas : SHM <br>\n<br>\n<br>\n&gt; Harga Permintaan : 2,5 M <br>\n<br>\n&gt; Turun Harga 2.47 M Nego sampai jadi<br>\n<br>\nInfo<br>\n\n                                                                                    ",
            "key_features": [
                {
                    "text": "Beds: 4",
                    "img_src": "https://build.dotproperty.id/assets/bed-f218f335.svg"
                },
                {
                    "text": "Baths: 3",
                    "img_src": "https://build.dotproperty.id/assets/bathtub-3411ca68.svg"
                },
                {
                    "text": "Usable area: 200 m2",
                    "img_src": "https://build.dotproperty.id/assets/resize-695d0a43.svg"
                },
                {
                    "text": "Land area: 356 m2",
                    "img_src": "https://build.dotproperty.id/assets/resize-695d0a43.svg"
                },
                {
                    "text": "Floor: 1",
                    "img_src": "https://build.dotproperty.id/assets/home-14376d6d.svg"
                }
            ],
            "facilities": [
                {
                    "text": "Electricity",
                    "img_src": "https://build.dotproperty.id/assets/electricity-9a055612.svg"
                }
            ],
            "latitude": "-6.9291188",
            "longitude": "107.6764994",
            "images": [
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/f0fa34de-758a-4c26-8074-78a5db3c2f34.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/14a68ce3-a2e8-4d2f-a755-a6572f5ef7a2.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/f0fa34de-758a-4c26-8074-78a5db3c2f34.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/14a68ce3-a2e8-4d2f-a755-a6572f5ef7a2.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/bb131506-bee8-4239-981c-d8ac33db6e65.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/c98e937e-f01c-441b-8e85-eeac95c6642b.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/d66cbca8-8ab8-4e23-871c-6b562f04a71c.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/818dcc1e-8980-4952-851b-c7d425babdfa.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/492b9b68-f0c8-410a-9f77-d8d35373577a.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/d07ab956-8155-4613-9db7-9a59593da298.bin",
                "https://images.proppit.com/properties/4899eb80-b8c4-101b-a2ef-c7f792c320a2/f7ed3458-0df2-4c1a-b213-2c5a2c4d1a29.bin"
            ],
            "provided_by": {
                "name": "FIRMAN - 0819 1009 8881",
                "href": "https://www.dotproperty.id/en/publisher/firman-0819-1009-8881_441ee3b4f580-ec6f-bb88-4a64-910ad288/properties-for-sale",
                "img": "https://images.proppit.com/publisher/117cf980-53f5-11ee-a3db-914a5e6bb855/logo.jpeg"
            }
        }
        ```
---

## Authentication
- **API Key Requirement:** Include the API key in the `api-key` header.
  ```bash
  "api-key: {YOUR_KEY}"



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
