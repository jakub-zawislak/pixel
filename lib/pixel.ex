defmodule Pixel do
  def main([uri, r, g, b]) do
    {:ok, image} = Imagineer.load(uri)

    {r, ""} = Integer.parse r
    {g, ""} = Integer.parse g
    {b, ""} = Integer.parse b

    image.pixels
    |> List.flatten
    |> Enum.filter(fn pixel -> pixel == {r, g, b} end)
    |> Enum.count
    |> IO.puts
  end

end
